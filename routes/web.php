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


Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::get('/home', 'KiwisController@index')->name('home');
    Route::post('/kiwi/{kiwi}/like', 'KiwisController@like')->name('kiwi-like');
    Route::post('/kiwi/{kiwi}/dislike', 'KiwisController@dislike')->name('kiwi-dislike');
    Route::post('/kiwi', 'KiwisController@store')->name('kiwi-store');
    Route::get('/explore', 'ExploreController')->name('explore');
    Route::get('/history', 'HistoryController')->name('history');
    Route::get('/user/{user}', 'ProfilesController@index')->name('profile');
    Route::post('/user/{user}/follow', 'ProfilesController@follow')->name('toggle-follow');
    Route::get('/user/{user}/edit', 'ProfilesController@edit')->name('edit-profile')->middleware('can:edit,user');
    Route::patch('/user/{user}/edit', 'ProfilesController@update')->name('update-profile')->middleware('can:edit,user');
});


