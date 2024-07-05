<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

                $data = DB::table("view_registrations")
                        ->where("status", "installation")
                        ->get();
                break;

            case "applications":

                $data = DB::table("view_registrations")
                        ->where("status", "registered")
                        ->get();
                break;

            default:

                $data = [];
                break;
        }

        return json_encode($data);

    }

    function ajax( Request $request ){

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
