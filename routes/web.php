<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
