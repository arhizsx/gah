<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    
    function chooser( $data){

        return view("modules.system.chooser", ["data" => $data]);

    }

    function empty_module( Request $request ){

        return view("modules.system.chooser");

    }
    

}


