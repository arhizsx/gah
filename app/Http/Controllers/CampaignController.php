<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CampaignController extends Controller
{
    function samsung(){

        $provinces = DB::table("location_provinces")->get();

        return view('samsung', [ "provinces" => $provinces]);

    }

    function xiaomi(){

        $provinces = DB::table("location_provinces")->get();

        return view('xiaomi', [ "provinces" => $provinces]);

    }

    function tm(){

        $provinces = DB::table("location_provinces")->get();

        return view('tm', [ "provinces" => $provinces]);

    }

}
