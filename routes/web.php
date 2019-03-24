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

Route::get('/', 'AlbumsController@index');
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{album}', 'AlbumsController@show');
Route::post('/albums/store', 'AlbumsController@store');

Route::get('/photos/create/{album}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
