<?php

use App\Http\Controllers\CurtainController;
use App\Models\Curtain;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        $curtains = Curtain::all();

        return view('welcome', compact('curtains'));
    });

    Route::get('locale/{lang}', function ($lang) {
        if (in_array($lang, ['tr', 'en', 'ru'])) {
            session()->put('locale', $lang);
        }

        app()->setLocale($lang);

        return redirect()->back();
    })->name('locale');

    Route::get('curtains/{slug}', [CurtainController::class, 'edit']);
});
