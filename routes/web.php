<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamsungController;
use App\Http\Controllers\SupervendorController;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\CampaignController;
use App\Models\CampaignRegistration;

// SUPERVENDOR
Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/supervendor',  [SupervendorController::class, 'index'])->name('home');

    Route::get('/supervendor/sgt',  [SupervendorController::class, 'sgt'])->name('sgt');
    Route::get('/supervendor/applications',  [SupervendorController::class, 'applications'])->name('applications');
    Route::get('/supervendor/installations',  [SupervendorController::class, 'installations'])->name('installations');
    Route::get('/supervendor/company',  [SupervendorController::class, 'company'])->name('company');
    Route::get('/supervendor/users',  [SupervendorController::class, 'users'])->name('users');
    Route::get('/supervendor/leadslist',  [SupervendorController::class, 'leadslist'])->name('leadslist');
    Route::get('/supervendor/reports',  [SupervendorController::class, 'reports'])->name('reports');

    Route::get('/supervendor/data/{action}',  [SupervendorController::class, 'data'])->name('data');
    Route::post('/supervendor/ajax',  [SupervendorController::class, 'ajax'])->name('ajax');

});

Route::post('/supervendor/locations',  [SupervendorController::class, 'locations'])->name('locations');



Route::post('/supervendor/ajax-public',  [SupervendorController::class, 'ajax_public'])->name('ajax_public');

// SAMSUNG CAMPAIGN
Route::post('/samsung/register', [SamsungController::class, 'register']);
Route::get('/samsung', [CampaignController::class, 'samsung']);


Route::get('/xiaomi', [CampaignController::class, 'xiaomi']);

// TM CAMPAIGN
Route::get('/retailerexclusive', [CampaignController::class, 'tm']);


// HPW CAMPAIGN
Route::get('/HPW', [CampaignController::class, 'hpw']);
Route::get('/hpw', function(){
    return redirect('/HPW');
});


// POSTPAID CAMPAIGN
Route::get('/postpaid', [CampaignController::class, 'postpaid']);


// GR+ CAMPAIGN
Route::get('/GRPlus', [CampaignController::class, 'grplus']);
Route::get('/grplus', function(){
    return redirect('/GRPlus');
});


// GPO CAMPAIGN
Route::get('/GPO', [CampaignController::class, 'gpo']);
Route::get('/gpo', function(){
    return redirect('/GPO');
});

// B2B CAMPAIGN
Route::get('/B2B', [CampaignController::class, 'b2b']);
Route::get('/b2b', function(){
    return redirect('/B2B');
});



// NUMBER VERIFIER
Route::get('/', function () {
    return abort(404);
    // return redirect('https://sam.globe.com.ph/broadband');
});

Route::get('/internal', function () {
    return abort(404);
    // return redirect('https://sam.globe.com.ph/broadband/internal');
});

Route::get('/mailgun', function () {
     Mail::raw('This is a test email using Mailgun!', function ($message) {
        $message->to('arhizsx@gmail.com')
                ->subject('Mailgun Test');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
