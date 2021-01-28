<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home'])->middleware('example');

Route::get('booking', ['as' => 'reservas', 'uses' => 'PagesController@booking']);

Route::get('information', ['as' => 'informacion', 'uses' => 'PagesController@information']);

Route::resource('mensajes', 'MessagesController');

Route::get('login', 'Auth\AuthController@showLoginForm');
