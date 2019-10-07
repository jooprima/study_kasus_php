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

Route::post('/pushData','Barang@store');
Route::get('/getData','Barang@getData');
Route::get('/hapusData/{id}','Barang@hapus');
Route::get('/getDetail/{id}','Barang@getDetail');
Route::post('/updateData','Barang@update');
Route::post('/Pertanyaan','Pertanyaan@Pertanyaan');
Route::post('/jawaban','Pertanyaan@jawaban');
Route::post('/UbahAkun','Akun@Ubah');
Route::post('/TambahAkun','Akun@Tambah');
Route::get('/getUser/{id}','Akun@getDetail');
