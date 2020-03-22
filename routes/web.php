<?php

use App\Receipe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PublicController@index');
Route::get('/detail/{id}', 'PublicController@show');

Route::get('/admin', 'AdminController@index');
Route::resource('/receipe', 'ReceipeController');

Auth::routes();
