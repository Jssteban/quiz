<?php

use App\Http\Controllers\AccidentesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/accidentes', AccidentesController::class)->names('accidentes');

