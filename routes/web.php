<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[TempController::class, 'index'])->name('welcome');

Route::resources([
    'users' => UsersController::class,
]);

//
//
//Route::get('/home', [HomeController::class, 'dashboard'])->name('home');



Route::get('/jobseeker-registeration', [UsersController::class,'jobseekerReg'])->name('jobseeker.reg');


Route::group(['prefix' => 'jobseeker','middleware' => ['verified','auth']], function () {

    Route::get('/profile', [JobseekerController::class, 'profile'])->name('jobseeker.profile');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

include('temp.php');

Auth::routes(['verify' => true]);

