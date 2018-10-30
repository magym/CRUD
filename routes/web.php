<?php

Route::resource('clientes','ClienteController');


Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

Route::get('inicio','InicioController@index')->name('inicio');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('clientes','ClienteController@clientes')->name('clientes');






















