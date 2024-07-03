<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SamsungController extends Controller
{
    function index(){

        return view('samsung');

    }

    function register(Request $request){



        return json_encode( $request->serviceability_check);

    }


}
