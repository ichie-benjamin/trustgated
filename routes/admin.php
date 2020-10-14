<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\StateController;


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', AdminDashboard::class)->name('dashboard');
    Route::resources([
        'countries' => CountryController::class,
        'lgas' => LgaController::class,
        'states' => StateController::class,
        'cities' => CityController::class,
        'skills' => SkillsController::class,
    ]);

});

