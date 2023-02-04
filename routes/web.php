<?php

// use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

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

Route::get('/', 'MainController@home')->name('home');

Route::middleware('auth')->group(function ()
{
    Route::post('post/create', 'PostController@create')->name('post.create');
    Route::post('post/update', 'PostController@update')->name('post.update');
});

Route::post('send/to/telegram', 'SendController@sendTelegram')->name('send.telegram');
Route::post('send/to/viber', 'SendController@sendViber')->name('send.viber');
Route::post('send/to/email', 'SendController@sendEmail')->name('send.email');

require __DIR__.'/auth.php';
