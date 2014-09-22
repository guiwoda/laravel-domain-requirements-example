<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@showWelcome');

Route::get('posts/{id}', ['as' => 'post', 'uses' => 'App\Http\Controllers\PostsController@show']);
