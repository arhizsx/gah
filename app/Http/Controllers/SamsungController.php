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

        try{


            $files_to_check = [ "serviceability_check", "serviceability_check2" , "receipt" ];

            // Upload path
            $destinationPath = 'files/';

            $files = [];

            foreach( $files_to_check as $f ){

                if( $request->hasFile( $f )) {

                    $extension = $request->file( $f )->getClientOriginalExtension();
                    $fileName = $f . '-' . time() . '-' . $request->file( $f )->getClientOriginalName();

                    // Uploading file to given path
                    $request->file( $f)->move($destinationPath, $fileName);



                }

            }




        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }







    }

    public function rename_file( $filename_data ) {

        $ext = pathinfo($filename_data, PATHINFO_EXTENSION);

        $file_name = strtolower( $filename_data ."-" . time()) . "." . $ext;

        return $file_name;

    }

}
