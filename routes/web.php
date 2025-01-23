<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource a diferencia de Route::apiResource inclou create y edit methods
Route::resource('countries', CountryController::class);
