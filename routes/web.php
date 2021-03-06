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



// Route::resource('/lists', 'ListController');



Route::get('/albums', 'AlbumController@index');
Route::get('/albums/create', 'AlbumController@create');
Route::get('/albums/{id}', 'AlbumController@show');
Route::post('/albums/store', 'AlbumController@store');
Route::delete('/albums/{id}', 'AlbumController@destroy');
Route::resource('albums', 'AlbumController');

Route::get('/photos/create/{id}', 'PhotoController@create');
Route::get('/photos/{id}', 'PhotoController@show');
Route::post('/photos/store', 'PhotoController@store');
Route::delete('/photos/{id}', 'PhotoController@destroy');

// Route::get('/groceries', 'GroceryController@index');
// Route::get('/groceries/create', 'GroceryController@create');
// Route::post('/groceries/store', 'GroceryController@store');
Route::resource('groceries', 'GroceryController');
// Route::get('/albums/create', 'AlbumController@create');
// Route::get('/albums/{id}', 'AlbumController@show');
// Route::post('/albums/store', 'AlbumController@store');

// Route::get('/chores', 'ChoreController@index');
// Route::get('/chores/create', 'ChoreController@create');
Route::resource('/chores', 'ChoreController');
// Route::delete('/chores/{id}', 'ChoreController@destroy');


Route::get('/calendars', 'CalendarController@calendar');

Route::get('/contacts', 'ContactController@index');
Route::resource('/contacts', 'ContactController');
Route::get('/contacts/createcontact', 'ContactController@create');
Route::post('/contacts/store', 'ContactController@store');
// Route::get('/contacts/{contacts}/edit', 'ContactController@edit');
Route::put('/contacts/{contacts}/edit', 'ContactController@update');
Route::delete('/contacts/{contact}', 'ContactController@destroy');
