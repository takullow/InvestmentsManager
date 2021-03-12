<?php

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
    return redirect()->route('mypage.index');
});

Route::prefix('login')->name('login.')->namespace('App\Http\Controllers')->group(function () {
    Route::get('', 'LoginController@login')->name('index');
    Route::post('execute', 'LoginController@executeLogin')->name('execute');
});

Route::prefix('logout')->name('logout.')->namespace('App\Http\Controllers')->group(function () {
    Route::get('', 'LoginController@logout')->name('index');
    Route::post('execute', 'LoginController@executeLogout')->name('execute');
});

Route::prefix('mypage')->name('mypage.')->namespace('App\Http\Controllers')->group(function () {
    Route::match(['GET', 'POST'], 'top', 'MypageController@top')->name('top');
});
