<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SamsungController extends Controller
{
    function index(){

        return view('samsung');

    }

    function register(Request $request){

        try{

            $validate = Validator::make( $request->all(), array(
                'serviceability_check' => 'required',
                'receipt' => 'required',
            ));

            if($validate->passes()){

                $file_error  = false;

                if( ! $request->hasFile('serviceability_check')) {
                    $file_error = true;
                }

                if( ! $request->hasFile('receipt')) {
                    $file_error = true;
                }

                if( $file_error ){
                    return "Upload Error";
                }

                return "Uploaded";
            }


        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }







    }

        // try {
        //     $validate = Validator::make($request->all(), array(
        //         'document_upload' => 'required',
        //     ));

        //     if($validate->passes()){


        //         if($request->hasFile('document_upload')) {

        //             // Upload path
        //             $destinationPath = 'files/';

        //             // Get file extension
        //             $extension = $request->file('document_upload')->getClientOriginalExtension();

        //             // Rename file
        //             $fileName = time().$request->file('document_upload')->getClientOriginalName();

        //             // Uploading file to given path
        //             $request->file('document_upload')->move($destinationPath, $fileName);

        //             $document_type_clean = $this->clean_special_char($request->input("document_type"));

        //             $new_file = $this->rename_file($fileName, $document_type_clean, $request->input("site_id"), $prefix);

        //             \Storage::move( $fileName, $new_file );


        //             \DB::beginTransaction();


        //             try {



        //                 $site_data = \DB::table($request->input("table"))->where("id", $request->input("site_id"))->first();


        //                 $site = json_decode($site_data->data, true);



        //                 $site["documents_data"][] = [
        //                     "document_type" => $request->input("document_type"),
        //                     "document_type_acronym" => $request->input("document_type_acronym"),
        //                     "filename" => $new_file,
        //                     "timestamp" => time(),
        //                     "user_id" => \Auth::user()->id,
        //                     "approvals" => [],
        //                     "status" => "uploaded"
        //                 ];



        //                 \DB::table($request->input("table"))
        //                     ->where("id", $request->input("site_id"))
        //                     ->update([
        //                         "data" => $site
        //                     ]);

        //                 \DB::table($request->input("tracking"))->insert([
        //                     "site_id" => $request->site_id,
        //                     "user_id" => \Auth::user()->id,
        //                     "user_group" => "demo",
        //                     "action" => "Document Upload",
        //                     "action_description" => "Uploaded " . $request->document_type
        //                 ]);



        //                 $new_data = \DB::table($request->input("table"))
        //                                 ->where("id", $request->input("site_id"))
        //                                 ->first();

        //                 $new = json_decode($new_data->data,  true);


        //                 $filter = $request->input("document_type_acronym");

        //                 $filtered = collect( $new["documents_data"] )->filter(function ($vx, $kx) use ($filter){
        //                     return $vx['document_type_acronym'] == $filter;
        //                 });

        //                 $result = [
        //                     "document_type_acronym" => $request->input("document_type_acronym"),
        //                     "files" => array_values($filtered->all())
        //                 ];

        //                 \DB::commit();


        //                 return response()->json(['error' => false, 'message' =>  $result ]);

        //             } catch (\Exception $e) {

        //                 if( \Storage::exists($new_file) ){

        //                     \Storage::delete( $new_file);

        //                 }else{
        //                 }

        //                 \DB::rollback();

        //                 return response()->json(['error' => true, 'message' =>  "Database Error Encountered: " . $e ]);

        //             }

        //         }

        //     } else {
        //         return response()->json(['error' => true, 'message' => $validate->errors()->all()]);
        //     }
        // } catch (\Throwable $th) {

        //     return response()->json(['error' => true, 'message' => $th->getMessage()]);
        // }

}
