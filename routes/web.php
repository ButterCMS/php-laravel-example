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

Route::get('/', function() {
  return Redirect::to("/blog", 301);
});
Route::get('/blog', "BlogController@listAllPosts");
Route::get('/blog/p/{page}', "BlogController@listAllPosts");
Route::get('/blog/{slug}', "BlogController@showPost");

Route::get('/authors', "BlogController@listAllAuthors");
Route::get('/author/{slug}', "BlogController@showAuthor");
Route::get('/author/{slug}/p/{page}', "BlogController@showAuthor");

Route::get('/categories', "BlogController@listAllCategories");
Route::get('/category/{slug}', "BlogController@showCategory");
Route::get('/category/{slug}/p/{page}', "BlogController@showCategory");

Route::get('/tags', "BlogController@listAllTags");
Route::get('/tag/{slug}', "BlogController@showTag");
Route::get('/tag/{slug}/p/{page}', "BlogController@showTag");