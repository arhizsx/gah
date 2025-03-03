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

        if( $current_user->position == "admin" ){
            
            return view( $module.'vouchers' )->render();

        } elseif( $current_user->role == "agent" ){

            return view( $module.'search')->render();

        } else {

            return view( $module . 'search' )->render();

        }



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

        if (is_int($request->search) || is_float($request->search)) {

            if ( str_starts_with($string, '0') && len( $request->search ) == 11 ) {
                $search = substr($request->search, 1);                
            }
            else {
                $search = $request->search;
            }             

        } else {
            echo "The variable is not a number.";
        }        

        $results = Vouchers::where('Mobile Number', 'like', "%{$search}%")
                    ->orWhere('Email', 'like', "%{$search}%")
                    ->get();

        return $results;

    }

}
