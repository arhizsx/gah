<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    
    function chooser( $modules){

        return view("modules.system.chooser", ["modules" => $modules]);

    }

    function empty_module( Request $request ){

        return view("modules.system.chooser");

    }
    

}


