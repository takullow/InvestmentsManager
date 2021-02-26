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
    return redirect()->route('login');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::prefix('mypage')->name('mypage.')->namespace('App\Http\Controllers')->group(function () {
    Route::post('index', function () {
        return view('mypage');
    })->name('index');

    Route::post('login', 'MypageController@login')->name('login');
});

