<?php

use Illuminate\Http\Request\Api;
use Illuminate\Support\Facades\Route;


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

Route::post('/auth/register', 'AuthController@createUser');
Route::post('/auth/login', 'AuthController@loginUser');

Route::get('/posts', 'PostController@getPosts');

Route::group(['prefix' => 'post', 'middleware' =>  ['auth:sanctum']], function () {
    Route::post('/create', 'PostController@create');
    Route::post('/update', 'PostController@update');
});