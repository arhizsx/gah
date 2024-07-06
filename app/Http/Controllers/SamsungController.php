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

        $regions = DB::table("location_regions")->get();
        $provinces = DB::table("location_provinces")->get();

        return view('samsung', ["regions" => $regions, "provinces" => $provinces]);

    }

    function register(Request $request){

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

        $registration = CampaignRegistration::create([
            "campaign" => 'samsung',
            "user_id" => null,
            "data" => json_encode($data)
        ]);

        return ["error" => false, "registration" => $registration ];

    }

}
