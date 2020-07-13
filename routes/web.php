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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'kiwisController@index')->name('home');
Route::post('/kiwi', 'KiwisController@store')->name('kiwi-store');
Route::get('/user/{user}', 'ProfilesController@index')->name('profile');
Route::post('/user/{user}/follow', 'ProfilesController@follow')->name('toggle-follow');
Route::get('/user/{user}/edit', 'ProfilesController@edit')->name('edit-profile')->middleware('can:edit,user');
Route::patch('/user/{user}/edit', 'ProfilesController@update')->name('update-profile')->middleware('can:edit,user');
