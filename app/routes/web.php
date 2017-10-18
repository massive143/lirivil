<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',function(){
	return view('welcome');
});

Route::get('login',  function(){
	return view('login');
});

Route::post('login','coPengguna@cekLogin');
Route::get('logout','coPengguna@logout');

Route::group(['middleware' => 'checklogin'], function () {

	Route::get('dashboard','coDashboard@home');
	Route::get('produk','coDashboard@produk');

});