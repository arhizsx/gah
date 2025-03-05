<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    
    function chooser( $modules){

        $modules = DB::table("users_modules")->where("user_id", Auth::user()->id)->get();

        return view("modules.system.chooser", ["modules" => $modules]);

    }

    function empty_module( Request $request ){

        return view("modules.system.chooser");

    }
    

}


