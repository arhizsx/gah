<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\Vouchers;
use App\Models\VoucherUsers;


class VouchersController extends Controller
{

    function home() {

        $current_user = VoucherUsers::find(Auth::id());

        $module = "modules.vouchers.";

        $current_user = VoucherUsers::find(Auth::id());
        
        if( $current_user->position == "admin" ){
            $position = "admin";
        } else {
            $position = "agent";
        }

        return view( $module.'search', compact('position') )->render();


    }

    function vouchers() {

        $current_user = VoucherUsers::find(Auth::id());

        $module = "modules.vouchers.";

        return view( $module.'vouchers')->render();


    }

    function management() {

        $current_user = VoucherUsers::find(Auth::id());

        $module = "modules.vouchers.";

        if( $current_user->position == "admin" ){
            return view($module . 'management')->render();
        } 

        return redirect()->route('vouchers');        

    }


    // Table Data
    function data( $action ){

        switch( $action ){

            case "vouchers":

                return DB::table("vouchers")
                            ->get();

            default:
                
                $data = [];

            break;
        }

        return json_encode($data);

    }

    function search( Request $request ){

        if( strlen($request->search) == 11 ){
             if( strpos($request->search, "0") == 0 ){
                $search = ltrim($request->search, '0');
             } else {
                $search = $request->search;
             }
        } else {
            $search = $request->search;
        }

        $current_user = VoucherUsers::find(Auth::id());

        $module = "modules.vouchers.";

        if( $current_user->position == "admin" ){
            
            $table = "vouchers_view";

            $results = DB::table($table)
                ->where('Mobile Number', 'like', "%{$search}%")
                ->orWhere('Email', 'like', "%{$search}%")
                ->orWhere('Full Name', 'like', "%{$search}%")
                ->get();

        } else {
            
            $table = "vouchers_limited_view";

            $results = DB::table($table)
                ->where('Mobile Number', 'like', "{$search}")
                ->get();
        }

        return $results;

    }

}
