<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ModuleController extends Controller
{
    
    function chooser(){

        $modules = DB::table("users_modules")->where("user_id", Auth::user()->id)->get();

        return view("modules.system.chooser", ["modules" => $modules]);

    }

    function empty_module( Request $request ){

        return view("modules.system.chooser");

    }
    

}


