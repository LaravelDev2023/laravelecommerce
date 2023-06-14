<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistration;

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
    return view('user_mainpage');
});

Route::controller(UserRegistration::class)->group(function () {
    Route::get('countries','index')->name('countries');
    Route::get('register','UserRegistration')->name('register');
    Route::post('register','UserRegistrationForm')->name('register');
    Route::get('login','UserLogin')->name('login');
    Route::post('login','UserLoginForm')->name('login');
    Route::get('resetpassword','UserResetPassword')->name('resetpassword');
    Route::post('resetpassword','UserResetPasswordForm')->name('resetpassword');
});