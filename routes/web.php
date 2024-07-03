<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamsungController;


Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');


Route::get('/applications', function () {
    return view('applications');
})->middleware(['auth', 'verified'])->name('applications');

Route::get('/mobile/applications', function () {
    return view('applications');
})->middleware(['auth', 'verified'])->name('mobile-applications');


Route::post('/samsung/register', [SamsungController::class, 'register']);

Route::get('/samsung', [SamsungController::class, 'index']);


Route::get('/verifier', function () {
    return redirect('https://sam.globe.com.ph/broadband');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
