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
    return view('/layouts/index');
});

// Route::get('/room', 'RoomController@index');
Route::post('/room/create', 'RoomController@create');
Route::get('/room/{id}/edit', 'RoomController@edit');
Route::post('/room/{id}/update', 'RoomController@update');
Route::get('/room/{id}/delete', 'RoomController@delete');

Route::resource('room', 'RoomController');
