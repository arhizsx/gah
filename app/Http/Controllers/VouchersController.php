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

                // Function to generate a consistent mask pattern for a given name
                function generateMaskPattern($name, $percentage = 0.4) {
                    $nameLength = strlen($name);
                    if ($nameLength > 2) {
                        $maskableIndexes = range(1, $nameLength - 2); // Exclude first and last letter
                        $maskCount = (int) ceil(count($maskableIndexes) * $percentage);

                        if ($maskCount > 0) {
                            return array_rand(array_flip($maskableIndexes), $maskCount);
                        }
                    }
                    return [];
                }

                // Get a sample record to generate consistent masks
                $sample = optional($results->first());
                $nameFields = ['First Name', 'Last Name', 'Middle Name', 'Suffix'];
                $maskPatterns = [];

                // Generate a consistent mask pattern for each name field
                foreach ($nameFields as $field) {
                    if (!empty($sample->$field)) {
                        $maskPatterns[$field] = generateMaskPattern($sample->$field, 0.4);
                    }
                }

                // Generate a consistent mask pattern for email
                $maskPatternEmail = [];
                if (!empty($sample->Email)) {
                    [$username, $domain] = explode('@', $sample->Email, 2);
                    $maskPatternEmail = generateMaskPattern($username, 0.4);
                }

                // Apply masking to all results
                $results = $results->map(function ($item) use ($maskPatterns, $maskPatternEmail) {
                    // Mask Voucher Assigned
                    $length = strlen($item->{'Voucher Assigned'});
                    $item->{'Voucher Assigned'} = str_repeat('*', $length);

                    // Mask Email
                    if (!empty($item->Email) && !empty($maskPatternEmail)) {
                        [$username, $domain] = explode('@', $item->Email, 2);
                        $usernameArray = str_split($username);

                        foreach ($maskPatternEmail as $pos) {
                            if (isset($usernameArray[$pos])) {
                                $usernameArray[$pos] = '*';
                            }
                        }

                        $item->Email = implode('', $usernameArray) . '@' . $domain;
                    }

                    // Mask First Name, Last Name, Middle Name, and Suffix
                    foreach (['First Name', 'Last Name', 'Middle Name', 'Suffix'] as $field) {
                        if (!empty($item->$field) && !empty($maskPatterns[$field])) {
                            $nameArray = str_split($item->$field);

                            foreach ($maskPatterns[$field] as $pos) {
                                if (isset($nameArray[$pos])) {
                                    $nameArray[$pos] = '*';
                                }
                            }

                            $item->$field = implode('', $nameArray);
                        }
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
