<?php

Route::post('/', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('/', 'AdsController@index')->name('home');
Route::get('/delete/{id}', 'AdsController@destroy');

Route::get('/edit', 'AdsController@edit');
Route::post('/edit', 'AdsController@store');
Route::get('/edit/{id}', 'AdsController@edit');

//Route::post('/{id}', 'SessionController@store');
Route::get('/{id}', 'AdsController@show');

