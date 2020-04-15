<?php

use Illuminate\Support\Facades\Route;

Route::get('/clients', 'ClientController@index');
Route::get('/clients/new', 'ClientController@create');
Route::post('/clients', 'ClientController@store');
