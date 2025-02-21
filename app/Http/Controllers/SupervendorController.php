<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CampaignRegistration;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class SupervendorController extends Controller
{

    function index(){

        $data = Cache::remember('dashboard_data', 3600, function () {
            return DB::table("view_dashboard")->get();
        }); 

        $campaigns = Cache::remember('dashboard_campaigns', 86400, function () {
            return DB::table("view_dashboard")
                ->DISTINCT("campaign")
                ->SELECT("campaign")->get();
        }); 

        $projects_list = Cache::remember('dashboard_projects', 86400, function () {
                return DB::table("projects")
                        ->distinct("project")
                        ->select("project")
                        ->get();
        }); 

        $project_campaigns = Cache::remember('dashboard_project_campaigns', 86400, function () {
                return DB::table("projects")
                    ->where("active", 1)
                    ->orderBy("project", "asc")
                    ->orderBy("campaign_sort", "asc")
                    ->get();
        }); 


        return view("home", ["data" => $data, "campaigns" => $campaigns, "projects_list" => $projects_list, "project_campaigns" => $project_campaigns]);
                
    }

    function sgt(){
        return view("sgt");
    }

    function applications(){

        // Cache vendors_list for 1 day
        $vendors_list = Cache::remember('vendors_list', 86400, function () {
            return DB::table("locations")
                        ->distinct()
                        ->select("SUPERVENDOR")
                        ->orderBy("SUPERVENDOR", "ASC")
                        ->get();
        });
    
        // Cache gt_list for 1 day
        $gt_list = Cache::remember('gt_list', 86400, function () {
            return DB::table("locations")
                        ->distinct()
                        ->select("SUPERVENDOR", "sgt_name", "sgt_email")
                        ->orderBy("SUPERVENDOR", "ASC")
                        ->get();
        });
    
        return view("applications", compact("vendors_list", "gt_list"));
    }

    function installations(){

        $html = Cache::remember("page_workorders", 3600, function () {
            return view("installations")->render();
        });
        return response($html);

    }

    function users(){

        $html = Cache::remember("page_users", 3600, function () {
            return view("users")->render();
        });
        return response($html);

    }

    function leadslist(){

        $html = Cache::remember("page_leadslist", 3600, function () {
            return view("leadslist")->render();
        });
        return response($html);

    }
    
    function reports(){

        $html = Cache::remember("page_reports", 3600, function () {
            return view("reports")->render();
        });
        return response($html);

    }
    
    function company(){
        return view("company");
    }

    // Table Data

    function data( $action ){

        $campaigns = [ "SAMSUNG", "REID", "GPO", "HPW", "POSTPAID", "ECPAY", "B2B", "GP-BB Offloader" ];
        $return_data = new Collection();
        $userCompany = Auth::user()->company;
        $cacheExpiration = 21600; // 6 hours cache expiration
        $todayMidnight = Carbon::now()->startOfDay(); // Today 00:00:00 

        switch( $action ){

            case "installations":

                $statuses = [
                    "HPW PROVIDED", 
                    "INSTALLED", 
                    "CANCELLED", 
                    "DROPPED",
                    "Cancelled - Customer Uncontacted and Address Cant Be Located",
                    "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                    "Cancelled - Customer Does not want to avail anymore",
                    "Cancelled - Permit Access Issue VG / Subdivision / Barangay",
                ];

                $return_data = collect();
            
                if ($userCompany == NULL) {

                    $yesterdayCacheKey = "processed_yesterday";
        
                    // Get Cached Yesterday's Data (Cache for 6 hours)
                    $yesterdayData = Cache::remember($yesterdayCacheKey, $cacheExpiration, function () use ($todayMidnight, $statuses) {
                        return DB::table("view_registrations_3")
                            ->whereNotNull("city")
                            ->where("Last Update", "<", $todayMidnight) // Only yesterday and older
                            ->whereIn("status", $statuses)
                            ->orderBy("id", "desc")
                            ->get();
                    });
        
                    // Fetch Fresh Data for Today
                    $todayData = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("Last Update", ">=", $todayMidnight) // Only today's data
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();
        
                    // Merge Yesterday's Cached Data + Today's Fresh Data, then Remove Duplicates
                    $mergedData = $todayData->merge($yesterdayData)->unique('id')->values();
        
                    // Merge to Return Data
                    if (!$mergedData->isEmpty()) {
                        $return_data = $return_data->merge($mergedData);
                    }

                } else {

                    $yesterdayCacheKey = "processed_yesterday_{$userCompany}";
        
                    // Get Cached Yesterday's Data (Cache for 6 hours)
                    $yesterdayData = Cache::remember($yesterdayCacheKey, $cacheExpiration, function () use ($todayMidnight, $statuses) {
                        return DB::table("view_registrations_3")
                            ->whereNotNull("city")
                            ->where("Last Update", "<", $todayMidnight) // Only yesterday and older
                            ->where("vendor", $userCompany)
                            ->whereIn("status", $statuses)
                            ->orderBy("id", "desc")
                            ->get();
                    });
        
                    // Fetch Fresh Data for Today
                    $todayData = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("Last Update", ">=", $todayMidnight) // Only today's data
                        ->where("vendor", $userCompany)
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();
        
                    // Merge Yesterday's Cached Data + Today's Fresh Data, then Remove Duplicates
                    $mergedData = $todayData->merge($yesterdayData)->unique('id')->values();
        
                    // Merge to Return Data
                    if (!$mergedData->isEmpty()) {
                        $return_data = $return_data->merge($mergedData);
                    }


                }
            
                return $return_data;                

            break;

            case "applications":


                $statuses = [
                    "ENDORSED",
                    "UNASSIGNED",
                    "PENDING",
                    "Pending - Customer Availability",
                    "Pending - SV Capacity Issue",
                    "Pending - Adverse Weather",
                    "Pending - Customer Uncontacted",
                    "Pending - Customer Undecided / On Hold by Subs",
                    "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                    "Pending - OSS / DGT System Issue",
                    "Pending - Permit Access Issue VG / Subdivision / Barangay",
                ];

                $return_data = collect();
            
                if ($userCompany == NULL) {

                    $yesterdayCacheKey = "workorders_yesterday";
        
                    // Get Cached Yesterday's Data (Cache for 6 hours)
                    $yesterdayData = Cache::remember($yesterdayCacheKey, $cacheExpiration, function () use ($todayMidnight, $statuses) {
                        return DB::table("view_registrations_3")
                            ->whereNotNull("city")
                            ->where("Last Update", "<", $todayMidnight) // Only yesterday and older
                            ->whereIn("status", $statuses)
                            ->orderBy("id", "desc")
                            ->get();
                    });
        
                    // Fetch Fresh Data for Today
                    $todayData = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("Last Update", ">=", $todayMidnight) // Only today's data
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();
        
                    // Merge Yesterday's Cached Data + Today's Fresh Data, then Remove Duplicates
                    $mergedData = $todayData->merge($yesterdayData)->unique('id')->values();
        
                    // Merge to Return Data
                    if (!$mergedData->isEmpty()) {
                        $return_data = $return_data->merge($mergedData);
                    }

                } else {

                    $yesterdayCacheKey = "workorders_yesterday_{$userCompany}";
        
                    // Get Cached Yesterday's Data (Cache for 6 hours)
                    $yesterdayData = Cache::remember($yesterdayCacheKey, $cacheExpiration, function () use ($todayMidnight, $statuses) {
                        return DB::table("view_registrations_3")
                            ->whereNotNull("city")
                            ->where("Last Update", "<", $todayMidnight) // Only yesterday and older
                            ->where("vendor", $userCompany)
                            ->whereIn("status", $statuses)
                            ->orderBy("id", "desc")
                            ->get();
                    });
        
                    // Fetch Fresh Data for Today
                    $todayData = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("Last Update", ">=", $todayMidnight) // Only today's data
                        ->where("vendor", $userCompany)
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();
        
                    // Merge Yesterday's Cached Data + Today's Fresh Data, then Remove Duplicates
                    $mergedData = $todayData->merge($yesterdayData)->unique('id')->values();
        
                    // Merge to Return Data
                    if (!$mergedData->isEmpty()) {
                        $return_data = $return_data->merge($mergedData);
                    }


                }

                return $return_data;                

            break;

            case "users":

                $cacheExpiration = 3600; // 1 hour cache expiration

                $users = Cache::remember("users_access", $cacheExpiration, function () {
                     return DB::table("users_access_view")->get();
                });

                return $users;

            break;

            case "leadslist":

                $cacheExpiration = 3600; // 1 hour cache expiration

                $return_data = Cache::remember("leadslist", $cacheExpiration, function () {
                    return DB::table("view_registrations_3")
                            ->wherenotnull("city")
                            ->get();
                });

                return $return_data;

            break;
                
            case "reports":

                $cacheExpiration = 3600; // 1 hour cache expiration

                $data = Cache::remember("leadslist", $cacheExpiration, function () {
                    return DB::table("view_registrations_3")
                            ->wherenotnull("city")
                            ->get();
                });

                return $data;

            break;                

            default:
                
                $data = [];

            break;
        }

        return json_encode($data);

    }

    function ajax( Request $request ){

        switch( $request->action ){

            case "application_hpw":

                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration->update([

                    "status" => 'HPW PROVIDED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_installed":

                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration->update([

                    "status" => 'INSTALLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_registered":

                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration->update([

                    "status" => 'UNASSIGNED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_cancelled":

                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration->update([
                    "status" => 'CANCELLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_endorsed":

                return $this->pending($request);

                $registration = CampaignRegistration::where("id", $request->id)->first();

                return $request->all();

                if( $registration_data ){

                    $registration_data = json_decode($registration->data,true);
                    $registration_data["remarks"] = $request->remarks;

                    $registration->update([
                        "status" => 'ENDORSED',
                        "data" => $registration_data
                    ]);

                } else {

                    $registration->update([
                        "status" => 'ENDORSED',
                    ]);

                }


                return ["error"=> false, "registration" => $registration];

            break;

            case "application_pending":

                return $this->pending($request);

            break;

            case "Pending - Customer Availability":

                return $this->pending($request);

            break;

            case "Pending - SV Capacity Issue":

                return $this->pending($request);

            break;

            case "Pending - Adverse Weather":

                return $this->pending($request);                

            break;

            case "Pending - Customer Uncontacted":

                return $this->pending($request);

            break;

            case "Pending - Customer Undecided / On Hold by Subs":

                return $this->pending($request);

            break;

            case "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)":

                return $this->pending($request);

            break;

            case "Pending - OSS / DGT System Issue":

                return $this->pending($request);
            
            break;

            case "Pending - Permit Access Issue VG / Subdivision / Barangay":

                return $this->pending($request);
            
            break;

            case "Pending - Permit Access Issue VG / Subdivision / Barangay":

                return $this->pending($request);

            break;

            case "Cancelled - Customer Uncontacted and Address Cant Be Located":

                return $this->pending($request);

            break;

            case "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)":

                return $this->pending($request);

            break;

            case "Cancelled - Customer Does not want to avail anymore":

                return $this->pending($request);

            break;

            case "Cancelled - Permit Access Issue VG / Subdivision / Barangay":

                return $this->pending($request);
            break;

            case "application_dropped":


                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration_data = CampaignRegistration::where("id", $request->id)->first();

                if( $registration_data ){

                    $registration_data = json_decode($registration_data->data,true);

                    $registration_data["remarks"] = $request->remarks;

                    $registration->update([
                        "status" => 'DROPPED',
                        "data" => $registration_data
                    ]);

                } else {

                    $registration->update([
                        "status" => 'DROPPED',
                    ]);

                }

                $registration = CampaignRegistration::where("id", $request->id)->get();


                return ["error"=> false, "registration" => $registration];

            break;

            // NEW STATUS CHANGER NOT YET IMPLEMENTED

            case "change_status":

                $registration = CampaignRegistration::where("id", $request->id)->first();
                $registration_data = CampaignRegistration::where("id", $request->id)->first();

                if( $registration_data ){

                    $registration_data = json_decode($registration_data->data,true);

                    $registration_data["remarks"] = $request->remarks;

                    $registration->update([
                        "status" => $request->new_status,
                        "data" => $registration_data
                    ]);

                } else {

                    $registration->update([
                        "status" => $request->new_status,
                    ]);

                }
                $registration = CampaignRegistration::where("id", $request->id)->get();

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_set_vendor":              

                $registration = CampaignRegistration::where("id", $request->id)->first();

                $registration->update([
                    "vendor" => $request->payload["vendor"],
                    "sgt_name" => $request->payload["gt"],
                    "sgt_email" => $request->payload["email"],
                    "status" => "ENDORSED",
                ]);

                $registration = CampaignRegistration::where("id", $request->id)->get();

                return ["error"=> false, "registration" => $registration];       

            break;

            default:

                return "action not found";


        }


        return $request;

    }

    function pending( $request ){

        $registration = CampaignRegistration::where("id",$request->id)->first();
        $registration_data = CampaignRegistration::where("id", $request->id)->first();

        if( $registration_data ){

            $registration_data = json_decode($registration_data->data,true);
            $registration_data["remarks"] = $request->remarks;

            $registration
                ->update([
                    "status" => $request->action,
                    "data" => $registration_data
                ]);

        } else {

            $registration->update([
                "status" => $request->action,
            ]);

        }

        return ["error"=> false, "registration" => $registration];

    }

    function ajax_public(Request $request){

        $data = $request->all();

        switch( $request->action ){

            case "register":

                return $this->doRegistration( $data, $request );
                break;

            case "numbercheck":

                return $this->doNumberCheck( $data, $request );
                break;


            default:

                return "action not found";
        }

    }

    function doNumberCheck( $data, $request ){

        if($request->campaign  == 'REID'){
            $table = "tm";
        }
        elseif($request->campaign  == 'POSTPAID'){
            $table = "postpaid";
        }
        elseif($request->campaign  == 'GPO'){
            $table = "gpo";
        }
        elseif($request->campaign  == 'B2B'){
            $table = "b2b";
        }
        elseif($request->campaign  == 'GLOBE PREPAID'){
            $table = "globeprepaid";
        }
        elseif($request->campaign  == 'HPW'){
            $table = "hpw";
        } else {
            return [
                "error" => true,
                "status" => "Campaign Not Configured in Number Chaeck",
            ];
        }

        try {

            $mobile_number = DB::table($table)
                    ->where("cellnumber", $request->cellnumber)
                    ->first();

            if( $mobile_number ){

                $registrations = DB::table("view_registrations_3")
                                    ->where("mobile_number", $request->cellnumber)
                                    ->where("campaign", $request->campaign)
                                    ->get();

                if(count($registrations) > 0 ) {
                    $status = "Multiple";
                } else {
                    $status = "Allowed";
                }

            } else {
                $status = "NotAllowed";
            }


            return [
                "error" => false,
                "status" => $status,
            ];
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'status' => 'Error',  'message' => $th->getMessage()]);
        }
    }    


    function doRegistration( $data, $request ){


        $result = $this->storeFile( $data, $request );

        if( $result["error"] == true ){
            return response()->json( ['error' => true, 'message' => $result["message"] ] );
        } else {
            $data = $result["data"];
        }

        $vendor = $this->getVendor($request->province, $request->city);

        $sgt_name = null;
        $sgt_email = null;
        $status = "UNASSIGNED";


        if( count( $vendor ) == 1 ){

            $supervendor = $vendor[0]->SUPERVENDOR;

            $sgt_name = $vendor[0]->sgt_name;
            $sgt_email = $vendor[0]->sgt_email;

            if( $request->campaign != 'SAMSUNG' ){
                $status = "ENDORSED";
            }

        }
        elseif( count( $vendor ) > 1 ){

            $supervendor = "%MULTI_VENDORS%";

        } else {

            $supervendor = null;

        }


        $registration = CampaignRegistration::create([
            "campaign" => $request->campaign,
            "user_id" => null,
            "status" => $status,
            "vendor" => $supervendor,
            "sgt_name" => $sgt_name,
            "sgt_email" => $sgt_email,
            "data" => json_encode($data)
        ]);

        return ["error" => false, "registration" => $registration ];

    }

    function storeFile( $data, $request ){

        // Upload Attached Documents
        try{

            // Upload path
            $destinationPath = 'files/';
            $disk = Storage::disk('gcs');

            // Cycle all uploaded files
            foreach( $request->file() as $f => $k ){

                if( $request->hasFile( $f )) {

                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . rand( time() , 1000 ) . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path

                    return Storage::disk('gcs')->write('uploads/'.$filename, $request-($f)->get());
                    $disk->putFileAs('', $file, $fileName);

                    $data[ $f ] = $fileName;

                }
            }

        } catch (\Throwable $th) {
            return ['error' => true, 'message' => $th->getMessage()];
        }

        return [ "error" => false, "data" => $data ];

    }    
    
    function locations( Request $request ){

        switch( $request->action ){

            case "provinces":
                return DB::table("location_provinces")
                        ->get();
                break;

            case "cities":
                return DB::table("location_cities")
                        ->where("PROVINCE", $request->value)
                        ->get();
                break;

            case "brgy":
                    return DB::table("location_cities")
                            ->where("PROVINCE", $request->value)
                            ->get();
                    break;
            }


        return $request;

    }

    function getVendor( $province, $city ){

        return DB::table("locations")
                ->where("province", $province)
                ->where("city", $city)
                ->get();
    }

}
