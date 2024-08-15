<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CampaignRegistration;

class SupervendorController extends Controller
{

    function index(){
        return view("home");
    }

    function sgt(){
        return view("sgt");
    }

    function applications(){
        return view("applications");
    }

    function installations(){
        return view("installations");
    }

    function company(){
        return view("company");
    }

    // Table Data

    function data( $action ){

        $access = DB::table("users_access")
            ->where( "user_id", Auth::user()->id );

        $registrations = DB::table("view_registrations");

        switch( $action ){

            case "installations":

                $campaign = array("SAMSUNG");


                if( in_array("SAMSUNG", $campaign) ){

                    $page_allowed_statuses = array("INSTALLED", "CANCELLED", "DROPPED");

                    if( Auth::user()->company == NULL  ){

                        $registrations = $registrations
                                            ->whereIn("campaign", $campaign)
                                            ->whereIn("status", $page_allowed_statuses)
                                            ->where("SGT Name", Auth::user()->name);

                    } else {

                        $registrations = $registrations
                                            ->whereIn("campaign", $campaign)
                                            ->whereIn("status", $page_allowed_statuses)
                                            ->where( "vendor", Auth::user()->company );
                    }
                }

                $data = $registrations->get();

                break;


            case "applications":

                $campaign = array("SAMSUNG");

                if( in_array("SAMSUNG", $campaign) ){

                    $page_allowed_statuses = array("ENDORSED");


                    if( Auth::user()->company == NULL  ){

                        $registrations = $registrations
                                            ->whereIn("campaign", $campaign)
                                            ->whereIn("status", $page_allowed_statuses)
                                            ->where("SGT Name", Auth::user()->name);

                    } else {

                        $registrations = $registrations
                                            ->whereIn("campaign", $campaign)
                                            ->whereIn("status", $page_allowed_statuses)
                                            ->where( "vendor", Auth::user()->company );

                    }


                }

                $data = $registrations->get();

                break;

            case "sgt":

                $campaign = array("SAMSUNG");

                $registrations = DB::table("view_registrations")
                                    ->whereIn("campaign", $campaign);

                if( Auth::user()->company == NULL  ){


                    if( in_array("SAMSUNG", $campaign) ){

                        $page_allowed_statuses = array("REGISTERED", "PENDING");

                        $registrations = $registrations
                                            ->where("SGT Name", Auth::user()->name)
                                            ->orwhere("SGT Name", "")
                                            ->orwhere("SGT Name", null);
                    }

                    $data = $registrations
                        ->wherein("status", $page_allowed_statuses)
                        ->orderBy("SGT Name", "desc")
                        ->get();

                }
                else {

                    if( in_array("SAMSUNG", $campaign) ){
                        $page_allowed_statuses = array("ENDORSED");
                    }


                    $data = DB::table("view_registrations")
                        ->where( "vendor", Auth::user()->company )
                        ->where( "status", $page_allowed_statuses )
                        ->get();

                }

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

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'INSTALLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            case "application_cancelled":

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'CANCELLED'
                ]);

                return ["error"=> false, "registration" => $registration];

            case "application_endorsed":

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'ENDORSED'
                ]);

                return ["error"=> false, "registration" => $registration];

            case "application_pending":

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'PENDING'
                ]);

                return ["error"=> false, "registration" => $registration];

            case "application_dropped":

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'DROPPED'
                ]);

                return ["error"=> false, "registration" => $registration];

        }


        return $request;

    }

    function ajax_public(Request $request){

        $data = $request->all();

        switch( $request->action ){

            case "register":

                return $this->doRegistration( $data, $request );
                break;

            default:

                return "action not found";
        }

    }

    function doRegistration( $data, $request ){

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
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }

        $vendor = $this->getVendor($request->province, $request->city);




        $sgt_name = null;
        $sgt_email = null;


        if( count( $vendor ) == 1 ){

            $supervendor = $vendor[0]->SUPERVENDOR;

            $sgt_name = $vendor[0]->sgt_name;
            $sgt_email = $vendor[0]->sgt_email;

        }
        elseif( count( $vendor ) > 1 ){

            $supervendor = "%MULTI_VENDORS%";

        } else {

            $supervendor = null;

        }


        $registration = CampaignRegistration::create([
            "campaign" => $request->campaign,
            "user_id" => null,
            "vendor" => $supervendor,
            "sgt_name" => $sgt_name,
            "sgt_email" => $sgt_email,
            "data" => json_encode($data)
        ]);

        return ["error" => false, "registration" => $registration ];

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
