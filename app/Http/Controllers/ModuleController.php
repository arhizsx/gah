<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    
    function chooser( Request $request ){

        return view("modules.system.chooser");

    }

}
