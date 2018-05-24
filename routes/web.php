<?php

Route::get('/profile', 'navController@profile');
Route::get('/dashboard', 'NavController@dashboard');
Route::get('/', 'NavController@index');