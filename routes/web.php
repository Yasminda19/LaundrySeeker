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

Route::get('/profile', 'ProfileController@show');
Route::put('/profile', 'ProfileController@update');

Route::get('/paket', 'PaketController@list');
Route::get('/paket/{id}', 'PaketController@show');
Route::delete('/paket/{id}', 'PaketController@delete');
Route::post('/paket', 'PaketController@create');
Route::put('/paket/{id}', 'PaketController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
