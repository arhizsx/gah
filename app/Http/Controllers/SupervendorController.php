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

    function applications_data(){

        $data = DB::table("users")->get();

        return json_encode($data);

    }


}
