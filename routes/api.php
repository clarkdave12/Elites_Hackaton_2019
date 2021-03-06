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

Route::get('/test', 'AppController@test');
Route::post('/register', 'AppController@register');
Route::get('/recruit/{id}', 'AppController@recruits');
Route::get('/recruits_name/{id}', 'AppController@recruitName');
