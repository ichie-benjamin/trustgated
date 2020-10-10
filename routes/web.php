<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[TempController::class, 'index'])->name('home');

Route::get('/check/{type}', [UsersController::class,'checkUser'])->name('check.user');


Route::get('/home',[TempController::class, 'index'])->name('auth.home');

Route::resources([
    'users' => UsersController::class,
]);



Route::get('/jobseeker-registeration', [UsersController::class,'jobseekerReg'])->name('jobseeker.reg');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/jobseeker/register', [UsersController::class, 'jobseekerReg'])->name('jobseeker.register');
    Route::get('/jobseeker/login', [UsersController::class, 'jobseekerLogin'])->name('jobseeker.login');

    Route::get('/employer/register', [UsersController::class,'employerReg'])->name('employer.register');
    Route::get('/employer/login', [UsersController::class,'employerLogin'])->name('employer.login');

});

Route::group(['prefix' => 'jobseeker','middleware' => ['verified','auth']], function () {

    Route::get('/profile', [JobseekerController::class, 'profile'])->name('jobseeker.profile');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'employer','middleware' => ['verified','auth']], function () {


    Route::get('/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

include('temp.php');

Auth::routes(['verify' => true]);

