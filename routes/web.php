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
    return view('welcome',["active" => "home_aktif"]);
});

//route tugas 4
Route::get('/tugas4', function () {
    return view('tugas4');
});

// route praktikum2
Route::get('/praktikum2', function () {
    return view('htmlprak2');
});

// route isian nama
Route::get('isiannama',"ViewController@showForm");
Route::post('greetings',"ViewController@resultGreetings");

// route ets
Route::get('ets',"ViewController@showETS");
// Route::post('ets',"ViewController@showETS");

// route tugas php
Route::get('tugasphp',"ViewController@showTugasPHP");
Route::post('tugasphp',"ViewController@showTugasPHP");

//ajax load groceries
Route::view('/grocery', 'grocery');
Route::post('/grocery/post', 'GroceryController@store');

//route CRUD pegawai
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
Route::get('/tugas/cari','TugasController@cari');
Route::get('/tugas/view/{id}','TugasController@detail');


//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/view/{id}','AbsenController@detail');


//route CRUD bus
Route::get('/bus','BusController@index');
Route::get('/bus/tambah','BusController@tambah');
Route::post('/bus/store','BusController@store');
Route::get('/bus/edit/{id}','BusController@edit');
Route::post('/bus/update','BusController@update');
Route::get('/bus/hapus/{id}','BusController@hapus');
Route::get('/bus/cari','BusController@cari');
Route::get('/bus/view/{id}','BusController@detail');

//route CRUD karyawan
Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/tambah','KaryawanController@tambah');
Route::post('/karyawan/store','KaryawanController@store');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/update','KaryawanController@update');
Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');
Route::get('/karyawan/cari','KaryawanController@cari');
Route::get('/karyawan/view/{id}','KaryawanController@detail');
