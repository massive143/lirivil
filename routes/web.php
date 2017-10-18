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



Route::get('/2', function() {
    return view('page2');
});

Route::resource('app', 'myController');

Route::get('coDash','coDashboard@produk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users','Pagination@users');


Route::get('/',function(){
    return view('app.wellcome');
});
 
Route::get('login',  function(){
    return view('app.login');
});
 
Route::post('login','coPengguna@cekLogin');
Route::get('logout','coPengguna@logout');
 
 
Route::group(['middleware' => 'checklogin'], function () {
    Route::get('dashboard','coDashboard@home');
    Route::get('produk','coDashboard@produk');
});


Route::get('/searchas','myController@searchas');
Route::post('/search', 'myController@search');