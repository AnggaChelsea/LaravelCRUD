<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users/{id}', 'App\Http\Controllers\RegisterController@get');
Route::post('users', 'App\Http\Controllers\RegisterController@post');