<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CampaignRegistration;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Storage;


class SupervendorController extends Controller
{

    // CAMPAIGNS ////////////////////////

    function samsung(){

        $provinces = DB::table("location_provinces")->get();

        return view('samsung', [ "provinces" => $provinces]);

    }

    function xiaomi(){

        $provinces = DB::table("location_provinces")->get();

        return view('xiaomi', [ "provinces" => $provinces]);

    }

    function tm(){

        $provinces = DB::table("location_provinces")->get();

        return view('tm', [ "provinces" => $provinces]);

    }

    function hpw(){

        $provinces = DB::table("location_provinces")->get();

        return view('hpw', [ "provinces" => $provinces]);

    }

    function postpaid(){

        $provinces = DB::table("location_provinces")->get();

        return view('postpaid', [ "provinces" => $provinces]);

    }

    function grplus(){

        $provinces = DB::table("location_provinces")->get();

        return view('grplus', [ "provinces" => $provinces]);

    }

    function gpo(){

        $provinces = DB::table("location_provinces")->get();

        return view('gpo', [ "provinces" => $provinces]);

    }

    function b2b(){

        $provinces = DB::table("location_provinces")->get();

        return view('b2b', [ "provinces" => $provinces]);

    }

    function globeprepaid(){

        $provinces = DB::table("location_provinces")->get();

        return view('globeprepaid', [ "provinces" => $provinces]);

    }

    // CAMPAIGNS ************************

    
    // PAGE FUNCTIONS ////////////////////////

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

        return view("installations");

    }

    function users(){

        return view("users");

    }

    function vendors(){

        return view("vendors");

    }

    function leadslist(){

        return view("leadslist");

    }
    
    function reports(){

        return view("reports");
 
    }
    
    function company(){
        return view("company");
    }

    // PAGE FUNCTIONS *******************


    // DATA FUNCTIONS ///////////////////

    function data( $action ){

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

                    $return_data = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();


                } else {

                    $return_data = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("vendor", $userCompany)
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();

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

                    $return_data = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();


                } else {

                    $return_data = DB::table("view_registrations_3")
                        ->whereNotNull("city")
                        ->where("vendor", $userCompany)
                        ->whereIn("status", $statuses)
                        ->orderBy("id", "desc")
                        ->get();

                }
            
                return $return_data;                

            break;

            case "users":

                return DB::table("view_users_management")
                            ->select("id", "name", "email", "company", "profile")
                            ->whereNull("company")
                            ->get();

            case "vendors":

                return DB::table("view_users_management")
                            ->select("id", "name", "email", "company", "profile")
                            ->whereNotNull("company")
                            ->get();

            break;

            case "leadslist":

                $return_data = DB::table("view_registrations_3")
                    ->whereNotNull("city")
                    ->orderBy("id", "desc")
                    ->get();
            
                return $return_data;                


            break;
                
            case "reports":

                $data =  DB::table("view_registrations_3")
                        ->wherenotnull("city")
                        ->get();

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
        elseif($request->campaign  == 'GP-BB Offloader'){
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

        if (!Storage::disk('gcs')) {
            return ['error' => true, 'message' => 'GCS disk is not configured properly'];
        }

        if( count($request->allFiles()) > 0 ){
            
            // $result = $this->storeFile( $data, $request );
            // $data = $result["data"];


            $result = $this->storeGCS( $data, $request );

            return $result;

        } 
        

        $vendor = $this->getVendor($request->province, $request->city);

        $sgt_name = null;
        $sgt_email = null;
        $status = "UNASSIGNED";


        if( count( $vendor ) == 1 ){

            $supervendor = $vendor[0]->SUPERVENDOR;

            $sgt_name = $vendor[0]->sgt_name;
            $sgt_email = $vendor[0]->sgt_email;

            $status = "ENDORSED";

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

            // Cycle all uploaded files
            foreach( $request->file() as $f => $k ){

                if( $request->hasFile( $f )) {


                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . rand( time() , 1000 ) . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path
                    $request->file($f)->move($destinationPath, $fileName);                
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

                $provinces = Cache::remember('provinces', 86400, function () {

                    return DB::table("location_provinces")
                            ->get();
                });

                return $provinces;

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

    // DATA FUNCTIONS *******************

    // GCS FUNCTIONS 

    function storeGCS($data, $request)
    {
        try {
            // Cycle through all uploaded files
            foreach ($request->file() as $f => $file) {
                if ($request->hasFile($f)) {
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $f . '-' . time() . '-' . $file->getClientOriginalName();
                    $filePath = 'files/' . $fileName;
                    
                    // Open file as a stream
                    $stream = fopen($file->getRealPath(), 'r');

                    if (!$stream) {
                        throw new \Exception("Failed to open file stream for {$file->getClientOriginalName()}");
                    }
    
                    // Write file to GCS (no need to check return value)
                    Storage::disk('gcs')->writeStream($filePath, $stream);

                    // Close the stream after writing
                    // fclose($stream);

                    // Save the public URL or file path
                    $data[$f] = $fileName;

                }
            }
        } catch (\Throwable $th) {
            return ['error' => true, 'message' => $th->getMessage()];
        }

        return ['error' => false, 'data' => $data];
    }


}
