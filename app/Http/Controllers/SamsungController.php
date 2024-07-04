<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SamsungController extends Controller
{
    function index(){

        return view('samsung');

    }

    function register(Request $request){

        $data = $request->all();

        $files_to_check = [ "serviceability_check", "serviceability_check2" , "receipt" ];
        $files = [];

        try{

            // Upload path
            $destinationPath = 'files/';


            foreach( $files_to_check as $f ){

                if( $request->hasFile( $f )) {

                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . time() . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path
                    $request->file( $f)->move($destinationPath, $fileName);

                    $files[ $f ] = $fileName;

                }
            }

        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }

        $data["files"] = $files;

        return $data;

    }

}
