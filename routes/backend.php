<?php

use App\Http\Controllers\Accont\AccountController;
use App\Http\Controllers\Personal\PersonalController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::controller(PersonalController::class)->group(function(){
        Route::get('personal', 'index')->name('data.personal');
        Route::get('create', 'create')->name('create.personal');
    });

    Route::controller(AccountController::class)->group(function(){
        Route::get('account', 'index')->name('data.account');
        Route::get('create', 'create')->name('create.account');
        Route::post('store', 'store')->name('store.account');
    });

});

