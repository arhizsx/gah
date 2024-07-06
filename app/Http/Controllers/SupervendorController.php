<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CampaignRegistration;

class SupervendorController extends Controller
{

    function index(){
        return view("home");
    }

    function applications(){
        return view("applications");
    }

    function installations(){
        return view("installations");
    }

    function company(){
        return view("company");
    }

    // Table Data

    function data( $action ){

        switch( $action ){

            case "installations":

                if( Auth::user()->company == NULL  ){

                    $data = DB::table("view_registrations")
                        ->where("status", "installed")
                        ->get();

                } else {

                    $data = DB::table("view_registrations")
                        ->where("status", "installed")
                        ->where("supervendor", Auth::user()->company )
                        ->get();

                }
                break;

            case "applications":

                if( Auth::user()->company == NULL  ){

                    $data = DB::table("view_registrations")
                        ->where("status", "registered")
                        ->get();

                } else {

                    $data = DB::table("view_registrations")
                        ->where("status", "registered")
                        ->where("supervendor", Auth::user()->company )
                        ->get();

                }

                break;

            default:

                $data = [];
                break;
        }

        return json_encode($data);

    }

    function ajax( Request $request ){

        switch( $request->action ){

            case "application_installed":

                $registration = CampaignRegistration::find($request->id);
                $registration->update([
                    "status" => 'installed'
                ]);

                return ["error"=> false, "registration" => $registration];
        }


        return $request;

    }

    function ajax_public(Request $request){

        $data = $request->all();

        // Upload Attached Documents
        try{

            // Upload path
            $destinationPath = 'files/';

            // Cycle all uploaded files
            foreach( $request->file() as $f => $k ){

                if( $request->hasFile( $f )) {

                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . rand( time() , 1000 ) . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path
                    $request->file( $f)->move($destinationPath, $fileName);

                    $data[ $f ] = $fileName;

                }
            }

        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }

        $vendor = $this->getVendor($request->province, $request->city);

        if( count( $vendor ) == 1 ){

            $registration = CampaignRegistration::create([
                "campaign" => $request->campaign,
                "user_id" => null,
                "vendor" => $vendor[0]->SUPERVENDOR,
                "data" => json_encode($data)
            ]);

            return ["error" => false, "registration" => $registration ];

        }
        elseif( count( $vendor ) > 1 ){

        } else {

        }



    }


    function locations( Request $request ){

        switch( $request->action ){

            case "provinces":
                return DB::table("location_provinces")
                        ->where("REGION", $request->value)
                        ->get();
                break;

            case "cities":
                return DB::table("location_cities")
                        ->where("PROVINCE", $request->value)
                        ->where("REGION", $request->region)
                        ->get();
                break;

        }


        return $request;

    }

    function getVendor( $province, $city ){

        return DB::table("locations")
                ->where("province", $province)
                ->where("city", $city)
                ->get();
    }

}
