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

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('/', 'AdsController@index')->name('home');
Route::get('/delete/{id}', 'AdsController@destroy');

Route::get('/edit', 'AdsController@edit');
Route::post('/edit', 'AdsController@store');
Route::get('/edit/{id}', 'AdsController@edit');
Route::post('/edit/{id}', 'AdsController@store');

Route::get('/{id}', 'AdsController@show');

