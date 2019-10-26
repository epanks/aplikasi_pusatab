<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');

Route::get('/create_paket','PaketController@create')->name('paket.create');
Route::get('/paket','PaketController@index')->name('paket.index');
Route::get('/paket/{id}','PaketController@show');