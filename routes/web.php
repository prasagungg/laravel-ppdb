<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/peserta','PesertaController@getData');

Route::get('/peserta','PesertaController@index');
Route::post('/peserta','PesertaController@store')->name('peserta.store');

Route::get('/peserta/orangtua','OrangtuaController@index')->name('orangtua.index');
Route::post('/peserta/orangtua','OrangtuaController@store')->name('orangtua.store');

Route::get('/peserta/orangtua/nilai','NilaiController@index')->name('nilai.index');
Route::post('/peserta/orangtua/nilai','NilaiController@store')->name('nilai.store');

Route::get('/hasil', function () {
    return view('peserta.registrasi.berkas');
});



