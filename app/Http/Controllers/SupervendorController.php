<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CampaignRegistration;
use Illuminate\Support\Collection;

class SupervendorController extends Controller
{

    function index(){

        $data = DB::table("view_dashboard")->get();
        $campaigns = DB::table("view_dashboard")
            ->DISTINCT("campaign")
            ->SELECT("campaign")->get();

        $projects_list = DB::table("projects")
                            ->distinct("project")
                            ->select("project")
                            ->get();

        $project_campaigns = DB::table("projects")
                                ->where("active", 1)
                                ->orderBy("project", "asc")
                                ->orderBy("campaign_sort", "asc")
                                ->get();

        return view("home", ["data" => $data, "campaigns" => $campaigns, "projects_list" => $projects_list, "project_campaigns" => $project_campaigns]);
        // return view("home", ["data" => null]);
                
    }

    function sgt(){
        return view("sgt");
    }

    function applications(){

        $vendors_list = DB::table("locations")
                            ->DISTINCT("SUPERVENDOR")
                            ->SELECT("SUPERVENDOR")
                            ->ORDERBY("SUPERVENDOR", "ASC")
                            ->get();

        $gt_list = DB::table("locations")
                            ->DISTINCT("SUPERVENDOR", "SGT Name", "sgt_email")
                            ->SELECT("SUPERVENDOR", "SGT Name", "sgt_email")
                            ->ORDERBY("SUPERVENDOR", "ASC")
                            ->get();

        return view("applications", ["vendors_list" => $vendors_list]);
    }

    function installations(){
        return view("installations");
    }

    function users(){
        return view("users");
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

    // Table Data

    function data( $action ){

        $access = DB::table("users_access")
            ->where( "user_id", Auth::user()->id )
            ->get();


        $registrations = DB::table("view_registrations_3");

        $campaigns = [ "SAMSUNG", "REID", "GPO", "HPW", "POSTPAID", "ECPAY", "B2B", "GP-BB Offloader" ];
        $return_data = new Collection();

        switch( $action ){

            case "installations":

                if( Auth::user()->company == NULL  ){

                    // ////////////////////////
                    // GT DATA :: INSTALLATIONS
                    // ////////////////////////

                    foreach(  $campaigns as $campaign ){


                        $data = null;

                        if( $access ){

                            foreach( $access as $u ){


                                $usr = DB::table("users")
                                        ->where("id", $u->user_id)
                                        ->first();

                                if( $u->campaign == $campaign ){

                                    if( $u->profile == "NSGT" && $u->position == "NSGT"  ){

                                        $data = DB::table("view_registrations_3")
                                            ->whereNotNull("SGT Name")
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->whereIn("status", array(
                                            "INSTALLED", 
                                            "CANCELLED", 
                                            "DROPPED",
                                            "Cancelled - Customer Uncontacted and Address Cant Be Located",
                                            "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                            "Cancelled - Customer Does not want to avail anymore",
                                            "Cancelled - Permit Access Issue VG / Subdivision / Barangay",

                                            ) )
                                            ->get();

                                    }
                                    elseif( $u->profile == "NSGT" && $u->position == "AREA HEAD"  ){

    
                                        $data = DB::table("view_registrations_3")
                                            ->whereNotNull("SGT Name")
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->where('area_head_email', $usr->email)
                                            ->whereIn("status", array(
                                            "INSTALLED", 
                                            "CANCELLED", 
                                            "DROPPED",
                                            "Cancelled - Customer Uncontacted and Address Cant Be Located",
                                            "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                            "Cancelled - Customer Does not want to avail anymore",
                                            "Cancelled - Permit Access Issue VG / Subdivision / Barangay",

                                            ) )
                                            ->get();

                                    }
                                    else if( $u->profile == "SGT" && $u->position == "SGT"   ){

                                        $data = DB::table("view_registrations_3")
                                            ->where("SGT Name", Auth::user()->name)
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->whereIn("status", array(
                                                "INSTALLED", 
                                                "CANCELLED", 
                                                "DROPPED",
                                                "Cancelled - Customer Uncontacted and Address Cant Be Located",
                                                "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                "Cancelled - Customer Does not want to avail anymore",
                                                "Cancelled - Permit Access Issue VG / Subdivision / Barangay",
                                            ) )
                                            ->get();

                                    }
                                    else if( $u->profile == "SGT" && $u->position == "CGE"   ){

                                        $data = DB::table("view_registrations_3")
                                            ->where("campaign", $campaign)             
                                            ->whereNotnull("city")
                                            ->where('area_head_email', $usr->email)
                                            ->where('cge_email', $usr->email)                                  
                                            ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED",
                                            "Cancelled - Customer Uncontacted and Address Cant Be Located",
                                            "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                            "Cancelled - Customer Does not want to avail anymore",
                                            "Cancelled - Permit Access Issue VG / Subdivision / Barangay",

                                            ) )
                                            ->get();

                                    }

                                }

                            }

                        }

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }


                    }


                } else {

                    // VENDOR DATA :: INSTALLATIONS

                    foreach(  $campaigns as $campaign ){


                        $data = null;

                        $data = DB::table("view_registrations_3")
                                ->where("campaign", $campaign)
                                ->whereNotnull("city")
                                ->whereIn("status", array(
                                    "INSTALLED", "CANCELLED", "DROPPED",
                                    "Cancelled - Customer Uncontacted and Address Cant Be Located",
                                    "Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                    "Cancelled - Customer Does not want to avail anymore",
                                    "Cancelled - Permit Access Issue VG / Subdivision / Barangay",
                                    ) )
                                ->where( "vendor", Auth::user()->company )
                                ->get();

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }

                    }


                }

                return $return_data;

                break;


            case "applications":

                if( Auth::user()->company == NULL  ){

                    // ////////////////////////
                    // GT DATA :: APPLICATIONS
                    // ////////////////////////

                    foreach(  $campaigns as $campaign ){

                        $data = null;

                        if( $access ){

                            foreach( $access as $u ){

                                $usr = DB::table("users")
                                        ->where("id", $u->user_id)
                                        ->first();

                                if( $u->campaign == $campaign ){


                                        $data = DB::table("view_registrations_3")
                                            // ->whereNotNull("SGT Name")
                                            ->whereNotnull("city")
                                            ->where("campaign", $campaign)
                                            ->whereIn("status", array(
                                                "ENDORSED",
                                                "UNASSIGNED", 
                                                "PENDING", 
                                                "ENDORSED",
                                                "Pending - Customer Availability", 
                                                "Pending - SV Capacity Issue", 
                                                "Pending - Adverse Weather", 
                                                "Pending - Customer Uncontacted", 
                                                "Pending - Customer Undecided / On Hold by Subs",
                                                "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                "Pending - OSS / DGT System Issue",
                                                "Pending - Permit Access Issue VG / Subdivision / Barangay",
                                                ) 
                                            )
                                            ->orderBy("id","desc")
                                            ->get();


                                }

                            }

                        }

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }

                    }


                } else {

                    // VENDOR DATA :: APPLICATIONS

                    foreach(  $campaigns as $campaign ){


                        $data = null;

                        $data = DB::table("view_registrations_3")
                                ->where("campaign", $campaign)
                                ->whereNotnull("city")
                                ->whereIn("status", array(
                                    "ENDORSED",
                                    "Pending - Customer Availability", 
                                    "Pending - SV Capacity Issue", 
                                    "Pending - Adverse Weather", 
                                    "Pending - Customer Uncontacted", 
                                    "Pending - Customer Undecided / On Hold by Subs",
                                    "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                    "Pending - OSS / DGT System Issue",
                                    "Pending - Permit Access Issue VG / Subdivision / Barangay",                                
                                ))
                                ->where( "vendor", Auth::user()->company )
                                ->orderBy("id","desc")
                                ->get();

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }


                    }


                }


                return $return_data;

                break;

            case "sgt":

                if( Auth::user()->company == NULL  ){


                    // ////////////////////////
                    // GT DATA :: SGT
                    // ////////////////////////

                    foreach(  $campaigns as $campaign ){


                        $data = null;

                        if( $access ){

                            foreach( $access as $u ){

                                $usr = DB::table("users")
                                        ->where("id", $u->user_id)
                                        ->first();

                                if( $u->campaign == $campaign ){

                                    if( $u->profile == "NSGT" && $u->position == "NSGT"  ){

                                        $data = DB::table("view_registrations_3")
                                            ->whereNotNull("SGT Name")
                                            ->whereNotnull("city")
                                            ->where("campaign", $campaign)
                                            ->whereIn("status", array(
                                                    "UNASSIGNED", 
                                                    "PENDING", 
                                                    "ENDORSED",
                                                    "Pending - Customer Availability", 
                                                    "Pending - SV Capacity Issue", 
                                                    "Pending - Adverse Weather", 
                                                    "Pending - Customer Uncontacted", 
                                                    "Pending - Customer Undecided / On Hold by Subs",
                                                    "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                    "Pending - OSS / DGT System Issue",
                                                    "Pending - Permit Access Issue VG / Subdivision / Barangay",
                                                    ) 
                                                )
                                            ->get();

                                    }
                                    elseif( $u->profile == "NSGT" && $u->position == "AREA HEAD"  ){

                                        $data = DB::table("view_registrations_3")
                                            ->whereNotNull("SGT Name")
                                            ->where('area_head_email', $usr->email)                                  
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->whereIn("status", array(
                                                    "UNASSIGNED", 
                                                    "PENDING", 
                                                    "ENDORSED",
                                                    "Pending - Customer Availability", 
                                                    "Pending - SV Capacity Issue", 
                                                    "Pending - Adverse Weather", 
                                                    "Pending - Customer Uncontacted", 
                                                    "Pending - Customer Undecided / On Hold by Subs",
                                                    "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                    "Pending - OSS / DGT System Issue",
                                                    "Pending - Permit Access Issue VG / Subdivision / Barangay",
                                            ) )
                                            ->get();

                                    }
                                    else if( $u->profile == "SGT" && $u->position == "SGT"  ){

                                        $data = DB::table("view_registrations_3")
                                            ->where("SGT Name", Auth::user()->name)
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->whereIn("status", array(
                                                    "UNASSIGNED", 
                                                    "PENDING", 
                                                    "Pending - Customer Availability", 
                                                    "Pending - SV Capacity Issue", 
                                                    "Pending - Adverse Weather", 
                                                    "Pending - Customer Uncontacted", "ENDORSED",
                                                    "Pending - Customer Undecided / On Hold by Subs",
                                                    "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                    "Pending - OSS / DGT System Issue",
                                                    "Pending - Permit Access Issue VG / Subdivision / Barangay",
                                            ) )
                                            ->get();

                                    }
                                    else if( $u->profile == "SGT" && $u->position == "CGE"  ){

                                        $data = DB::table("view_registrations_3")
                                            ->where('cge_email', $usr->email)                                  
                                            ->where("campaign", $campaign)
                                            ->whereNotnull("city")
                                            ->whereIn("status", array(
                                                "UNASSIGNED", 
                                                "PENDING", 
                                                "ENDORSED",
                                                "Pending - Customer Availability", 
                                                "Pending - SV Capacity Issue", 
                                                "Pending - Adverse Weather", 
                                                "Pending - Customer Uncontacted", 
                                                "Pending - Customer Undecided / On Hold by Subs",
                                                "Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)",
                                                "Pending - OSS / DGT System Issue",
                                                "Pending - Permit Access Issue VG / Subdivision / Barangay",
                                            ) )
                                            ->get();

                                    }

                                }

                            }

                        }

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }

                    }


                } else {

                    // VENDOR DATA :: SGT

                    foreach(  $campaigns as $campaign ){


                        $data = null;

                        $data = [];

                        if( $data != null ){

                            $return_data->push(  ...$data );

                        }


                    }


                }

                return $return_data;

                break;

            case "users":

                $users = DB::table("users_access_view")->get();

                return $users;
                break;

            case "leadslist":

                $my_campaigns = DB::table("users_access")   
                                ->select("campaign")
                                ->distinct()                                                     
                                ->where("user_id", Auth::user()->id)
                                ->get();

                $active_campaigns = array();
                
                if( $my_campaigns ){

                    foreach( $my_campaigns as $my_campaign ){
                        array_push($active_campaigns, $my_campaign->campaign);
                    }

                }


                $data = DB::table("view_registrations_3")
                        ->wherenotnull("city")
                        ->whereIn("campaign", $active_campaigns)
                        ->get();

                return $data;
                break;
                
            case "reports":

                $data = DB::table("view_registrations_3")
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

            case "application_installed":

                $registration = CampaignRegistration::where("id", $request->id);
                $registration->update([

                    "status" => 'INSTALLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_registered":

                $registration = CampaignRegistration::where("id", $request->id);
                $registration->update([

                    "status" => 'UNASSIGNED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_cancelled":

                $registration = CampaignRegistration::where("id", $request->id);
                $registration->update([
                    "status" => 'CANCELLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_endorsed":

                $registration = CampaignRegistration::where("id", $request->id);
                $registration_data = $registration->first();

                if( $registration_data ){

                    $registration_data = json_decode($registration_data->data,true);
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

                $registration = CampaignRegistration::where("id", $request->id);
                $registration_data = $registration->first();

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

                return ["error"=> false, "registration" => $registration];

            break;

            case "change_status":

                $registration = CampaignRegistration::where("id", $request->id);
                $registration_data = $registration->first();

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

                return ["error"=> false, "registration" => $registration];

            break;

            case "application_set_vendor":              

                $registration = CampaignRegistration::where("id", $request->id);

                
                $registration->update([
                    "vendor" => $request->vendor
                ]);

                return ["error"=> false, "registration" => $registration];       

            break;

            default:

                return "action not found";


        }


        return $request;

    }

    function pending( $request ){

        $registration = CampaignRegistration::where("id", $request->id);

        $registration_data = CampaignRegistration::where("id", $request->id)->first();

        if( $registration_data ){

            $registration_data = json_decode($registration_data->data,true);
            $registration_data["remarks"] = $request->remarks;

            $registration->update([
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

    // function doTMCheck( $data, $request ){

    //     $tm = DB::table("tm")
    //             ->where("cellnumber", $request->cellnumber)
    //             ->first();

    //     if( $tm ){

    //         $registrations = DB::table("view_registrations_3")
    //                             ->where("mobile_number", $request->cellnumber)
    //                             ->where("campaign", "REID")
    //                             ->get();

    //         if(count($registrations) > 0 ) {
    //             $status = "Multiple";
    //         } else {
    //             $status = "Allowed";
    //         }

    //     } else {
    //         $status = "NotAllowed";
    //     }


    //     return [
    //         "error" => false,
    //         "status" => $status,
    //     ];
    // }

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

            // Cycle all uploaded files
            foreach( $request->file() as $f => $k ){

                if( $request->hasFile( $f )) {

                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . rand( time() , 1000 ) . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path
                    $request->file( $f)->move($destinationPath, $fileName);

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
