<?php

Route::get('/profile', 'NavController@profile');
Route::get('/dashboard', 'NavController@dashboard');
Route::get('/', 'NavController@index');