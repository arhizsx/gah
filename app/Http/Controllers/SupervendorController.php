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

        switch( $action ){

            case "installations":

                if( Auth::user()->company == NULL  ){

                    $data = DB::table("view_registrations")
                        ->where("status", "installed")
                        ->get();

                } else {

                    $data = DB::table("view_registrations")
                        ->where("status", "installed")
                        ->where("supervendor", Auth::user()->company )
                        ->get();

                }
                break;

            case "applications":

                if( Auth::user()->company == NULL  ){

                    $data = DB::table("view_registrations")
                        ->where("status", "registered")
                        ->get();

                } else {

                    $data = DB::table("view_registrations")
                        ->where("status", "registered")
                        ->where("supervendor", Auth::user()->company )
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
                    "status" => 'installed'
                ]);

                return ["error"=> false, "registration" => $registration];
        }


        return $request;

    }


    function locations( Request $request ){

        switch( $request->action ){

            case "provinces":
                return DB::table("location_provinces")
                        ->where("REGION", $request->value)
                        ->get();
                break;

            case "cities":
                return DB::table("location_cities")
                        ->where("PROVINCE", $request->value)
                        ->where("REGION", $request->region)
                        ->get();
                break;

        }


        return $request;

    }

}
