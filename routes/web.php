<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
    return redirect('/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->middleware('auth');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/user-settings', 'userSetting')->name('user-setting');
        Route::post('/update-password', 'updatePassword');
    });
});
