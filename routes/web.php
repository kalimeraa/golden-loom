<?php

use App\Http\Controllers\CurtainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('curtains/{slug}', [CurtainController::class, 'edit']);