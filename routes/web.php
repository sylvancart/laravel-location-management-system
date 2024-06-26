<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PincodeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::get('/change-password', [BackendController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [BackendController::class, 'updatePassword'])->name('update-password');


    Route::resource('states', StateController::class);

    Route::resource('cities', CityController::class);

    Route::resource('pincodes', PincodeController::class);
    
});

require __DIR__.'/auth.php';
