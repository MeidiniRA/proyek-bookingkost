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
    return view('/layout/index');
});
Route::resource('about', 'AboutController');
Route::resource('ac', 'AcController');
Route::resource('contact', 'ContactController');
Route::resource('home', 'HomeController');
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
	Route::get('room/export', 'RoomController@export');
	Route::get('room/exportPdf', 'RoomController@exportPdf');

Route::get('/room', function () {
    //return view('welcome');
    return view('/room.index');
});


// Route::get('/room', 'RoomController@index');
Route::resource('room', 'RoomController');
Route::post('/room/create', 'RoomController@create');
Route::get('/room/{id}/edit', 'RoomController@edit');
Route::post('/room/{id}/update', 'RoomController@update');
Route::get('/room/{id}/delete', 'RoomController@delete');


Route::resource('booking', 'BookingController');
Route::post('/booking/create', 'BookingController@create');
Route::get('/booking/{id}/edit', 'BookingController@edit');
Route::post('/booking/{id}/update', 'BookingController@update');
Route::get('/booking/{id}/delete', 'BookingController@delete');

Route::resource('customer', 'CustomerController');
Route::post('/customer/create', 'CustomerController@create');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::post('/customer/{id}/update', 'CustomerController@update');
Route::get('/customer/{id}/delete', 'CustomerController@delete');

Route::resource('admin', 'AdminController');
Route::post('/admin/create', 'AdminController@create');
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::post('/admin/{id}/update', 'AdminController@update');
Route::get('/admin/{id}/delete', 'AdminController@delete');

Route::get('/clear-cache', function() {
	Artisan::call('cache:clear');
	return "Cache is cleared";
});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
