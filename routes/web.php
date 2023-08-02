<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('penjualan');
});
Route::get('anggota', 'App\Http\Controllers\AnggotaController@index');
Route::get('anggota/tambah', 'App\Http\Controllers\AnggotaController@tambah');
Route::post('anggota/tambah_proses', 'App\Http\Controllers\AnggotaController@tambah_proses');
Route::get('anggota/edit/{id}', 'App\Http\Controllers\AnggotaController@edit');
Route::post('anggota/edit_proses', 'App\Http\Controllers\AnggotaController@edit_proses');
Route::get('anggota/delete/{id}', 'App\Http\Controllers\AnggotaController@delete');

Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');

Route::get('penjualan', 'App\Http\Controllers\PenjualanController@index');
Route::get('penjualan/tambah', 'App\Http\Controllers\PenjualanController@tambah');
Route::post('penjualan/tambah_proses', 'App\Http\Controllers\PenjualanController@tambah_proses');
Route::get('penjualan/edit/{id}', 'App\Http\Controllers\PenjualanController@edit');
Route::post('penjualan/edit_proses', 'App\Http\Controllers\PenjualanController@edit_proses');
Route::get('penjualan/delete/{id}', 'App\Http\Controllers\PenjualanController@delete');