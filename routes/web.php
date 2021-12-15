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
Route::get('tugas4', function () {
    return view('jscript');
});
Route::get('prak2', function () {
    return view('praktikum2');
});
Route::get('isiannama',"ViewController@showForm");
Route::post('greetings',"ViewController@resultGreetings");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route ikan hiu makan tomat
Route::get('/ikan','IkanController@index');
Route::get('/ikan/tambah','IkanController@tambah');
Route::post('/ikan/store','IkanController@store');
Route::get('/ikan/edit/{id}','IkanController@edit');
Route::post('/ikan/update','IkanController@update');
Route::get('/ikan/hapus/{id}','IkanController@hapus');
Route::get('/ikan/view/{id}','IkanController@detail');
Route::get('/ikan/cari','IkanController@cari');

//route belanja UAS
Route::get('/keranjangbelanja','BelanjaController@index');
Route::get('/keranjangbelanja/tambah','BelanjaController@tambah');
Route::post('/keranjangbelanja/store','BelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','BelanjaController@hapus');
