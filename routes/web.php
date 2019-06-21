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
    return view('home');
});
Route::get('lembaga', function () {
    return view('lembaga');
});
Route::get('siswa', function () {
    return view('siswa');
});
Route::get('kurikulum', function () {
    return view('kurikulum');
});
Route::get('alur', function () {
    return view('alur');
});
