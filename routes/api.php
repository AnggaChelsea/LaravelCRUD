<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assignedProject directory "/opt/lampp/htdocs/laravel/crudapi" is not empty.  the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/product', 'App\Http\Controllers\ProductController@post');
Route::get('/product', 'App\Http\Controllers\ProductController@get');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@getById');
Route::put('/product/{id}', 'App\Http\Controllers\ProductController@put');
Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@delete');

Route::post('users', 'App/Http/Controllers/RegisterController@post');