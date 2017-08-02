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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/albums/store', 'AlbumController@store');
Route::resource('/albums', 'AlbumController');
// Route::get('/albums', 'AlbumController@index');
// Route::get('/albums/create', 'AlbumController@create');
// Route::post('/albums/store', 'AlbumController@store');

Route::resource('/lists', 'ListController');
