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

        return view("home", ["data" => $data]);
                
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

    function users(){
        return view("users");
    }

    function leadslist(){
        return view("leadslist");
    }
    

    function company(){
        return view("company");
    }

    // Table Data

    function data( $action ){

        $access = DB::table("users_access")
            ->where( "user_id", Auth::user()->id )
            ->get();


        $registrations = DB::table("view_registrations");

        $campaigns = [ "SAMSUNG", "XIAOMI" ];
        $return_data = new Collection();

        switch( $action ){

            case "installations":

                if( Auth::user()->company == NULL  ){

                    // ////////////////////////
                    // GT DATA :: INSTALLATIONS
                    // ////////////////////////

                    foreach(  $campaigns as $campaign ){

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNotNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = DB::table("view_registrations")
                                                ->where("SGT Name", Auth::user()->name)
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                                ->get();

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNotNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = DB::table("view_registrations")
                                                ->where("SGT Name", Auth::user()->name)
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                                ->get();

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                    }


                } else {

                    // VENDOR DATA :: INSTALLATIONS

                    foreach(  $campaigns as $campaign ){

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            $data = DB::table("view_registrations")
                                    ->where("campaign", $campaign)
                                    ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                    ->where( "vendor", Auth::user()->company )
                                    ->get();

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }


                        }


                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            $data = DB::table("view_registrations")
                                    ->where("campaign", $campaign)
                                    ->whereIn("status", array("INSTALLED", "CANCELLED", "DROPPED") )
                                    ->where( "vendor", Auth::user()->company )
                                    ->get();

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

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

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNotNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = DB::table("view_registrations")
                                                ->where("SGT Name", Auth::user()->name)
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("") )
                                                ->get();

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNotNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("REGISTERED") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = DB::table("view_registrations")
                                                ->where("SGT Name", Auth::user()->name)
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("REGISTERED") )
                                                ->get();

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                    }


                } else {

                    // VENDOR DATA :: APPLICATIONS

                    foreach(  $campaigns as $campaign ){

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            $data = DB::table("view_registrations")
                                    ->where("campaign", $campaign)
                                    ->whereIn("status", array(""))
                                    ->where( "vendor", Auth::user()->company )
                                    ->get();

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }


                        }


                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            $data = DB::table("view_registrations")
                                    ->where("campaign", $campaign)
                                    ->whereIn("status", array("REGISTERED", "ENDORSED"))
                                    ->where( "vendor", Auth::user()->company )
                                    ->get();

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

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

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNotNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("REGISTERED", "PENDING", "ENDORSED") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = DB::table("view_registrations")
                                                ->where("SGT Name", Auth::user()->name)
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("REGISTERED", "PENDING", "ENDORSED") )
                                                ->get();

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            if( $access ){

                                foreach( $access as $u ){

                                    if( $u->campaign == $campaign ){

                                        if( $u->profile == "NSGT" ){

                                            $data = DB::table("view_registrations")
                                                ->whereNull("SGT Name")
                                                ->where("campaign", $campaign)
                                                ->whereIn("status", array("REGISTERED") )
                                                ->get();

                                        }
                                        else if( $u->profile == "SGT" ){

                                            $data = [];

                                        }

                                    }

                                }

                            }

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

                        }

                    }


                } else {

                    // VENDOR DATA :: SGT

                    foreach(  $campaigns as $campaign ){

                        if( $campaign == "SAMSUNG" ){

                            $data = null;

                            $data = [];

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }


                        }


                        elseif( $campaign == "XIAOMI" ){

                            $data = null;

                            $data = [];

                            if( $data != null ){

                                $return_data->push(  ...$data );

                            }

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

                $data = DB::table("view_registrations")
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

                    "status" => 'REGISTERED'
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

                $registration = CampaignRegistration::where("id", $request->id);

                $registration_data = CampaignRegistration::where("id", $request->id)->first();

                if( $registration_data ){

                    $registration_data = json_decode($registration_data->data,true);
                    $registration_data["remarks"] = $request->remarks;

                    $registration->update([
                        "status" => 'PENDING',
                        "data" => $registration_data
                    ]);

                } else {

                    $registration->update([
                        "status" => 'PENDING',
                    ]);

                }

                return ["error"=> false, "registration" => $registration];

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
