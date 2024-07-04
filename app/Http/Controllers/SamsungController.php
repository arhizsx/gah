<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CampaignRegistration;
use Illuminate\Support\Facades\Auth;

class SamsungController extends Controller
{
    function index(){

        return view('samsung');

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
            "user_id" => Auth::user()->id,
            "data" => json_encode($data)
        ]);

        return $registration;

    }

}
