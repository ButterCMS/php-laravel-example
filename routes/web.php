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

Route::get('/', "BlogController@listPosts");
Route::get('/page/{page}', "BlogController@listPosts");
Route::get('/post/{slug}', "BlogController@showPost");
