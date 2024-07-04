<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamsungController;
use App\Http\Controllers\SupervendorController;

// SUPERVENDOR
Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/supervendor',  [SupervendorController::class, 'index'])->name('home');

    Route::get('/supervendor/applications',  [SupervendorController::class, 'applications'])->name('applications');
    Route::get('/supervendor/installations',  [SupervendorController::class, 'installations'])->name('installations');
    Route::get('/supervendor/company',  [SupervendorController::class, 'company'])->name('company');

    Route::get('/supervendor/data/{action}',  [SupervendorController::class, 'data'])->name('data');

});

// SAMSUNG CAMPAIGN
Route::post('/samsung/register', [SamsungController::class, 'register']);
Route::get('/samsung', [SamsungController::class, 'index']);


// NUMBER VERIFIER
Route::get('/', function () {
    return redirect('https://sam.globe.com.ph/broadband');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
