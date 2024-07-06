<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CampaignRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SamsungController extends Controller
{
    function index(){

        $provinces = DB::table("location_provinces")->get();

        return view('samsung', [ "provinces" => $provinces]);

    }


}
