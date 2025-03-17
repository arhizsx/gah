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
            return view($module . 'vouchers')->render();
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
            
            $table = "vouchers";

            $results = DB::table($table)
                ->where('Mobile Number', 'like', "%{$search}%")
                ->orWhere('Email', 'like', "%{$search}%")
                ->get();

        } else {
            
            $table = "vouchers";

            $results = DB::table($table)
                ->where('Mobile Number', 'like', "{$search}")
                ->get();

                // Get a sample email to generate a consistent mask pattern
                $sampleEmail = optional($results->first())->Email;

                $maskPattern = [];

                if (!empty($sampleEmail)) {
                    $emailLength = strlen($sampleEmail);
                    $maskCount = (int) ceil($emailLength * 0.6);

                    // Generate unique random positions to mask
                    $maskPattern = array_rand(array_flip(range(0, $emailLength - 1)), $maskCount);
                }

                $results = $results->map(function ($item) use ($maskPattern) {
                    // Mask Voucher Assigned
                    $length = strlen($item->{'Voucher Assigned'});
                    $item->{'Voucher Assigned'} = str_repeat('*', $length);

                    // Apply the same email masking pattern to all results
                    if (!empty($item->Email) && !empty($maskPattern)) {
                        $emailArray = str_split($item->Email);
                        
                        foreach ($maskPattern as $pos) {
                            if (isset($emailArray[$pos])) {
                                $emailArray[$pos] = '*';
                            }
                        }

                        $item->Email = implode('', $emailArray);
                    }

                    return $item;
                });                
                
        }

        return $results;

    }

    function resend( Request $request ){
            

        $voucher = Vouchers::where("id", $request->id )->first();


        if( $voucher ){

            $purchase_data = date("m/d/Y", strtotime( $voucher->{"Purchased At (Date+Time)"} ));

            $details = [
                'subject' => "Disney+ Voucher from GFiber Prepaid " . $purchase_data,
                'template' => "modules.vouchers.emails.resend",
                "voucher" => "1-month Disney+ Premium access",
                "voucher_code" => $voucher->{"Voucher Assigned"},
                "firstname" => $voucher->{"First Name"},
                "activation" => $voucher->{"Purchased At (Date+Time)"},
            ];

            
            $email = $voucher->{"Email"};
            Mail::to( $email )->send(new GahNotifEmail($details));
    
            return ["error" => false,  "message" => "sent"];
    
        }

        return ["error" => true,  "message" => "Item Not Found"];

    }
}
