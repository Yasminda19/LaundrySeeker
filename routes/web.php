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

Route::get('/manage/profile', 'ProfileController@show')->name('profile');
Route::put('/manage/profile', 'ProfileController@update');

Route::get('/paket/{id}', 'PaketController@show');
Route::get('/paket', 'PaketController@fallback')->name('paket');

Route::get('/manage/paket', 'KelolaPaketController@list')->name('kelolapaket');
Route::delete('/manage/paket/{id}', 'KelolaPaketController@delete');
Route::post('/manage/paket', 'KelolaPaketController@create');
Route::put('/manage/paket/{id}', 'KelolaPaketController@update');

Route::get('/manage/order', 'OrderController@list_launderer');

Route::get('/order/{id}', 'OrderController@show');
Route::get('/order', 'OrderController@list')->name('order');
Route::post('/order/new/{id}', 'OrderController@create');
Route::get('/order/new/{id}', 'OrderController@create_form');

Auth::routes();

Route::get('/home/{lokasi}', 'HomeController@search');
Route::get('/home', 'HomeController@index')->name('home');
