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

    function vouchers() {

        $current_user = VoucherUsers::find(Auth::id());

        $module = "modules.vouchers.";

        if( $current_user->role == "admin" ){
            return view($module . 'management');
        } elseif( $current_user->role == "agent" ){
            return view($module . 'search');
        } else {
            return view($module . 'permission');
        }
    }

    function management() {
        return view('vouchers');
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
}
