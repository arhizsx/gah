<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\Vouchers;
use App\Models\VoucherUsers;

use Illuminate\Support\Facades\Mail;
use App\Mail\GahNotifEmail;


class VouchersController extends Controller
{

    function home() {


        $module = "modules.vouchers.";

        $current_user = VoucherUsers::where("user_id", Auth::id())->first();
        
        $position = "agent";

        if( $current_user){

            $position =  $current_user->position;
    
        }


        return view( $module.'search', compact('position', 'current_user') )->render();


    }

    function vouchers() {

        $current_user = VoucherUsers::where("user_id", Auth::id())->first();

        $module = "modules.vouchers.";

        if( $current_user->position == "admin" ){
            return view($module . 'management')->render();
        } 

        return redirect()->route('vouchers_home');        


    }

    function management() {

        $current_user = VoucherUsers::where("user_id", Auth::id())->first();

        $module = "modules.vouchers.";

        if( $current_user->position == "admin" ){
            return view($module . 'management')->render();
        } 

        return redirect()->route('vouchers_home');        

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

        $search = str_replace( "+63", "", $search );

        $current_user = VoucherUsers::where("user_id", Auth::id())->first();

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

    function resend( Request $request ){
            
        $voucher = Vouchers::find($request->id );

        if( $voucher ){

            $details = [
                'subject' => "Disney+ Voucher from GFiber Prepaid",
                'template' => "modules.vouchers.emails.resend",
                "voucher" => "1-month Disney+ Premium access",
                "voucher_code" => $voucher->{"Voucher Assigned"},
                "firstname" => $voucher->{"First Name"},
                "activation" => $voucher->{"Purchased At (Date+Time)"},
            ];

            dd( $details );
            
            $email = "mykel.nodalo@globe.com.ph";
            Mail::to( $email )->send(new GahNotifEmail($details));
    
            $email = "arhizsx@gmail.com";
            Mail::to( $email )->send(new GahNotifEmail($details));
    
            return ["error" => false,  "message" => "sent"];
    
        }

        return ["error" => true,  "message" => "Item Not Found"];

    }
}
