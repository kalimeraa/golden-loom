<?php

use App\Http\Controllers\CurtainController;
use App\Models\Curtain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $curtains = Curtain::all();

    return view('welcome', compact('curtains'));
});


Route::get('curtains/{slug}', [CurtainController::class, 'edit']);