<?php

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

Route::get('/aaa', function () {
    return view('aaa');
});

Route::get('/setting/profile', 'ProfileController@show')->name('profile');
Route::put('/setting/profile', 'ProfileController@update');

Route::get('/paket/{id}', 'PaketController@show');
Route::get('/paket', 'PaketController@fallback')->name('paket');

Route::get('/setting/paket', 'KelolaPaketController@list')->name('kelolapaket');
Route::delete('/setting/paket/{id}', 'KelolaPaketController@delete');
Route::post('/setting/paket', 'KelolaPaketController@create');
Route::put('/setting/paket/{id}', 'KelolaPaketController@update');

Auth::routes();

Route::get('/home/{lokasi}', 'HomeController@search');
Route::get('/home', 'HomeController@index')->name('home');
