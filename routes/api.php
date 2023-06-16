<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/read', 'mhsApiController@read');
Route::post('/mahasiswa/create','mhsApiController@create');
Route::post('/mahasiswa/update/{id}','mhsApiController@update');
Route::delete('/mahasiswa/delete/{id}','mhsApiController@delete');

Route::get('/task/read', 'mhsApiController@readtask');
Route::post('/task/create','mhsApiController@createtask');
Route::post('/task/update/{id}','mhsApiController@updatetask');
Route::delete('/task/delete/{id}','mhsApiController@deletetask');