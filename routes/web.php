<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', 'UserController@index');

Route::get('/usuario/{id}', 'UserController@show')
->where('id', '[0-9]+');

Route::get('usuario/nuevo', 'UserController@create');

Route::get('saludo/{name}/{nickname?}', 'WelcomeUserController');