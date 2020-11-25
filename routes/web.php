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

//route INDEX
Route::get('/sales','SalesController@index');

//route tambah data
Route::get('/sales/tambah_po','SalesController@tambah_po');
Route::post('/sales/store_po','SalesController@store_po');

//route view tv premimum
Route::get('/sales/viewpremium','SalesController@viewpremium');

//route view pending aktivasi
Route::get('/sales/viewpending','SalesController@viewpending');

//route view input order
Route::get('/sales/vieworder','SalesController@vieworder');

//route input order
Route::get('/sales/editorder/{id}','SalesController@editorder');
Route::post('/sales/updateorder','SalesController@updateorder');

//route report progress
Route::get('/ticket/report','PegawaiController@report');
Route::get('/ticket/cari','PegawaiController@cari');


//route hapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');