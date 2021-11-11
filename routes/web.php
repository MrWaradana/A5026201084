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

// route tugas php
Route::get('tugasphp',"ViewController@showTugasPHP");
