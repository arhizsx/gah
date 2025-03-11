<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    
    function index() {      

        return view('modules.administrator.index');
        
    }

    function data() {      

        $folder = 'imports/'; // Folder inside GCS bucket
        $disk = Storage::disk('gcs');
        
        $files = $disk->listContents($folder, true); // true for recursive listing
        

        $imports = collect($files)
            ->where('type', 'file') // Only get files, not directories
            ->map(function ($file) use ($disk) {
                return [
                    'path' => $file['path'],
                    'timestamp' => date("Y-m-d H:i:s", substr($file['lastModified'], 0, 10)) ?? null,
                    'mimeType' => $disk->mimeType($file['path']) ?? 'unknown',
                ];
            })
            ->toArray();        

        
        return view('modules.administrator.data', ["imports" => $imports]);
        
    }


    function data_import() {      


        $file = request('file'); // Get the file from query parameters

        // Check if the file exists
        $data = null;

        if (Storage::disk('gcs')->fileExists($file)) {
            try {
                $stream = Storage::disk('gcs')->readStream($file);

                if ($stream) {
                    // Open the stream as a CSV file
                    $csv = fopen('php://temp', 'r+'); // Temporary file
                    stream_copy_to_stream($stream, $csv);
                    rewind($csv);
            
                    // Process CSV
                    $data = [];
                    while (($row = fgetcsv($csv)) !== false) {
                        $data[] = $row; // Store CSV rows as arrays
                    }
                    fclose($csv);
                    fclose($stream);
            
                } else {                    
                    echo "Failed to read the file.";
                }

            } catch (\League\Flysystem\UnableToReadFile $e) {
                $data = null; // Handle the case where the file does not exist or cannot be read
            }
        }

        
        return view('modules.administrator.data_import', ["data" => $data, "file" => $file]);
        
    }


    function users() {      

        return view('modules.administrator.users');
        
    }

}
