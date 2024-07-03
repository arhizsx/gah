<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SamsungController extends Controller
{
    function index(){
        return view('samsung');
    }

    function FunctionName(Request $request){

        return $request;

    }


}
