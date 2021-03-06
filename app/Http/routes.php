<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/api/categories', 'CategoryController@index');
Route::get('/api/categories/{id}/topics', 'CategoryController@topics');


# Vue
Route::any('{all}', function () {
   return view('index');
})->where(['all' => '.*']);
