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

// Halaman Login
Route::get('login','Login@login');
// Halaman Register
Route::get('register','Login@register');
// Form input Register
Route::post('register','Login@store');

// Users
Route::get('users','Users@index');


// Users Data Diri 
Route::get('users/data-diri','DataDiri@index');
// Proses Simpan Data Diri
Route::post('users/data-diri','DataDiri@store');


// Users Data Orang Tua 
Route::get('users/data-orangtua','Users@data_orangtua');
// Users Data Periodik 
Route::get('users/data-periodik','Users@data_periodik');
// Users Data Akademik 
Route::get('users/data-akademik','Users@data_akademik');
// Users Data Bantuan 
Route::get('users/data-bantuan','Users@data_bantuan');
// Users Data Rapor 
Route::get('users/data-rapor','Users@data_rapor');