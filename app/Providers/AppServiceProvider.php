<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;
use League\Flysystem\GoogleCloudStorage\GoogleCloudStorageAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Storage::extend('gcs', function ($app, $config) {
            $client = new StorageClient([
                'projectId' => $config['project_id'],
                'keyFilePath' => $config['key_file'],
            ]);
    
            $bucket = $client->bucket($config['bucket']);
            $adapter = new GoogleCloudStorageAdapter($bucket);
    
            return new Filesystem($adapter);
        });        
    }
}
