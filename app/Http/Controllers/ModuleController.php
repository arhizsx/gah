<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ModuleController extends Controller
{
    
    function chooser(){

        $modules = DB::table("users_modules")
                    ->JOIN("modules", "users_modules.module", "modules.module")
                    ->where("user_id", Auth::user()->id)
                    ->orderBy("sort")
                    ->get();


        return view("modules.system.chooser", ["modules" => $modules ]);

    }

    function empty_module( Request $request ){

        return view("modules.system.chooser");

    }
    

}


