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
    return view('welcome');
});

Route::Auth();

//Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');
Route::get('/tambahTerasi','terasiController@redir')->middleware('auth', 'cekstat');
Route::post('/insertTerasi','terasiController@insertTerasi')->middleware('auth', 'cekstat');
Route::get('/viewTerasi','terasiController@viewBarang')->middleware('auth', 'cekstat');
Route::get('/viewTerasim','terasiController@viewBarangUser')->middleware('auth');
Route::get('/viewFormPemesanan','pemesananController@redir')->middleware('auth');
Route::get('/forbidden', function () {
    return view('forbidden');
});
Route::get('/hapusTerasi/{id}','terasiController@hapusBarang')->middleware('auth', 'cekstat');
Route::get('/postTerasi/{id}','terasiController@postBarang')->middleware('cekstat');
Route::get('/batalpostTerasi/{id}','terasiController@batalpostBarang')->middleware('cekstat');
Route::get('/editTerasi/{id}','terasiController@geteditBarang')->middleware('auth', 'cekstat');
Route::post('/updateTerasi/{id}','terasiController@editBarang')->middleware('auth', 'cekstat');
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);