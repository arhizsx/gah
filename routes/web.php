<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\SupervendorController;
use App\Http\Controllers\VouchersController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AdministratorController;



// ////////////////////////////
//                           //
//      AUTHENTICATION       //
//                           //
// ////////////////////////////



    Route::group(['middleware' => ['auth', 'verified', "LogUserPageVisit"]], function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

// ****************************
//                           **
//      AUTHENTICATION       **
//                           **
// ****************************


// /////////////////////////
//                        //
//      SUPERVENDOR       //
//                        //
// /////////////////////////

    // ///////
    // PAGES
    // ///////

    Route::group(['middleware' => ['auth', 'verified', "LogUserPageVisit", "ModuleCheck:supervendor"]], function () {

        Route::get('/supervendor',  [SupervendorController::class, 'index'])->name('home');
        Route::get('/supervendor/sgt',  [SupervendorController::class, 'sgt'])->name('sgt');
        Route::get('/supervendor/applications',  [SupervendorController::class, 'applications'])->name('applications');
        Route::get('/supervendor/installations',  [SupervendorController::class, 'installations'])->name('installations');
        Route::get('/supervendor/company',  [SupervendorController::class, 'company'])->name('company');
        Route::get('/supervendor/users',  [SupervendorController::class, 'users'])->name('users');
        Route::get('/supervendor/vendors',  [SupervendorController::class, 'vendors'])->name('vendors');
        Route::get('/supervendor/leadslist',  [SupervendorController::class, 'leadslist'])->name('leadslist');
        Route::get('/supervendor/reports',  [SupervendorController::class, 'reports'])->name('reports');

        Route::get('/supervendor/data/{action}',  [SupervendorController::class, 'data'])->name('data');
        Route::post('/supervendor/ajax',  [SupervendorController::class, 'ajax'])->name('ajax');
        Route::get('/supervendor/gcsExists/{image}',  [SupervendorController::class, 'gcs_exists'])->name('gcs_exists');

    });

    // ///////////////
    // PUBLIC ACTIONS
    // ///////////////
    Route::group(['middleware' => ['LogUserPageVisit']], function () {

        Route::post('/supervendor/locations',  [SupervendorController::class, 'locations'])->name('locations');
        Route::post('/supervendor/ajax-public',  [SupervendorController::class, 'ajax_public'])->name('ajax_public');

    });

    // ///////////////
    // CAMPAIGN PAGES
    // ///////////////

    Route::group(['middleware' => ['LogUserPageVisit']], function () {

        // SAMSUNG CAMPAIGN
        Route::get('/samsung', [SupervendorController::class, 'samsung']);

        // XIAOMI CAMPAIGN
        Route::get('/xiaomi', [SupervendorController::class, 'xiaomi']);

        // TM CAMPAIGN
        Route::get('/retailerexclusive', [SupervendorController::class, 'tm']);

        // HPW CAMPAIGN
        Route::get('/HPW', [SupervendorController::class, 'hpw']);
        Route::get('/hpw', function(){
            return redirect('/HPW');
        });

        // POSTPAID CAMPAIGN
        Route::get('/postpaid', [SupervendorController::class, 'postpaid']);

        // GR+ CAMPAIGN
        Route::get('/GRPlus', [SupervendorController::class, 'grplus']);
        Route::get('/grplus', function(){
            return redirect('/GRPlus');
        });

        // GPO CAMPAIGN
        Route::get('/GPO', [SupervendorController::class, 'gpo']);
        Route::get('/gpo', function(){
            return redirect('/GPO');
        });

        // B2B CAMPAIGN
        Route::get('/B2B', [SupervendorController::class, 'b2b']);
        Route::get('/b2b', function(){
            return redirect('/B2B');
        });

        // GlobePrepaid CAMPAIGN
        Route::get('/GlobePrepaid', [SupervendorController::class, 'globeprepaid']);
        Route::get('/globeprepaid', function(){
            return redirect('/GlobePrepaid');
        });
        

        // 
        Route::get('/homecredit', [SupervendorController::class, 'homecredit']);

    });

    // ***************
    // CAMPAIGN PAGES
    // ***************


// *************************
//                        **
//      SUPERVENDOR       **
//                        **
// *************************



// /////////////////////////////
//                            //
//      NUMBER VERIFIER       //
//                            //
// /////////////////////////////

Route::group(['middleware' => ['LogUserPageVisit']], function () {

    Route::get('/', function () {
        return abort(404);
        // return redirect('https://sam.globe.com.ph/broadband');
    });

    Route::get('/internal', function () {
        return abort(404);
        // return redirect('https://sam.globe.com.ph/broadband/internal');
    });

});

// ****************************
//                            //
//      NUMBER VERIFIER       //
//                            //
// ****************************



// //////////////////////
//                     //
//      VOUCHERS       //
//                     //
// //////////////////////


    Route::group(['middleware' => ['auth', 'verified', 'LogUserPageVisit', "ModuleCheck:vouchers"]], function () {

        Route::get('/vouchers', [VouchersController::class, 'home'])->name('vouchers_home');

        Route::get('/vouchers/list', [VouchersController::class, 'vouchers'])->name('vouchers_list');

        Route::get('/vouchers/management', [VouchersController::class, 'management'])->name('vouchers_management');

        Route::get('/vouchers/data/{action}',  [VouchersController::class, 'data']);        

        Route::post('/vouchers/search',  [VouchersController::class, 'search']);        

        Route::post('/vouchers/resend',  [VouchersController::class, 'resend']);        

    });


// ******************* //
//                     //
//      VOUCHERS       //
//                     //
// ******************* //

Route::group(['middleware' => ['auth', 'verified', 'LogUserPageVisit']], function () {

    Route::get('/chooser',  [ModuleController::class, 'chooser'])->name("chooser");        
    Route::get('/empty_module',  [ModuleController::class, 'chooser'])->name("empty_module");        

    Route::get('/permission',  [ModuleController::class, 'permission'])->name("permission");        

});



// ************************ //
//                          //
//      ADMINISTRATOR       //
//                          //
// ************************ //

Route::group(['middleware' => ['auth', 'verified', 'LogUserPageVisit', "ModuleCheck:administrator"]], function () {

    Route::get('/administrator',  [AdministratorController::class, 'index'])->name("administrator");        

    Route::get('/administrator/data',  [AdministratorController::class, 'data'])->name("administrator_data");        
    Route::get('/administrator/data/import',  [AdministratorController::class, 'data_import']);        

    Route::get('/administrator/users',  [AdministratorController::class, 'users'])->name("administrator_users");        

});




require __DIR__.'/auth.php';
