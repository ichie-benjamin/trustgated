<?php

use App\Http\Controllers\admin\EducationalDetails;
use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FunctionalAreaController;
use App\Http\Controllers\IndustryTypeController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\StateController;


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', AdminDashboard::class)->name('dashboard');

//    User Listing

    Route::get('user/admins', [UsersController::class, 'admins'])->name('user.admins');
    Route::get('user/employers', [UsersController::class, 'employers'])->name('user.employers');
    Route::get('user/jobseekers', [UsersController::class, 'jobseekers'])->name('user.jobseekers');
    Route::get('user/jobseeker', [UsersController::class, 'jobseekers'])->name('user.jobseeker');

    Route::resources([
        'countries' => CountryController::class,
        'users' => UsersController::class,
        'jobs' => JobsController::class,
        'lgas' => LgaController::class,
        'states' => StateController::class,
        'cities' => CityController::class,
        'skills' => SkillsController::class,
        'industry-type'     => IndustryTypeController::class,
        'functional-area'   => FunctionalAreaController::class,
        'educational-details' => EducationalDetails::class,
        'products' => ProductsController::class,
    ]);

});

