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

            case "applications":

                $data = DB::table("users")->get();
                break;

            case "installations":

                $data = DB::table("users")->get();
                break;

            case "samsung":

                $data = DB::table("samsung_registrations")->get();
                break;

            default:

                $data = DB::table("users")->get();
                break;
        }

        return json_encode($data);

    }


}
