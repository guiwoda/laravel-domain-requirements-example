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
Route::get('posts',      ['as' => 'posts.search', 'uses' => 'App\Http\Controllers\PostsController@index']);

Route::get('tags/{id}', ['as' => 'tag', 'uses' => 'App\Http\Controllers\TagsController@show']);
Route::get('tags',      ['as' => 'tags', 'uses' => 'App\Http\Controllers\TagsController@index']);
