<?php

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

Route::resource('/receipe', 'ReceipeController');

// get all index page 		(GET) 		/receipe
// Route::get('receipe', 'ReceipeController@index');
// // create form 				(GET) 		receipe/create
// Route::get('receipe/create', 'ReceipeController@createReceipeForm');
// // show data 				(GET) 		receipe/{receipe_id}
// Route::get('receipe/{id}', 'ReceipeController@show');
// // create receipe 			(POST) 		receipe
// Route::post('/receipe', 'ReceipeController@create');
// // edit form 				(GET) 		receipe/{receipe_id}/edit
// Route::get('receipe/{id}/edit', 'ReceipeController@edit');
// // update form 				(PATCH)		receipe/{receipe_id}
// Route::patch('receipe/{id}', 'ReceipeController@update');
// // delete receipe 			(DELETE)	receipe/{receipe_id}
// Route::delete('receipe/{id}', 'ReceipeController@delete');