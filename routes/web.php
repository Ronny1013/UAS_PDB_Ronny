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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/penduduk', 'ControllerPenduduk@index')->name('penduduk.index');
Route::get('/penduduk/create', 'ControllerPenduduk@create')->name('penduduk.create');
Route::post('/penduduk/create', 'ControllerPenduduk@store')->name('penduduk.store');
Route::get('/penduduk/{id}', 'ControllerPenduduk@show')->name('penduduk.show');
Route::get('/penduduk/{id}/edit', 'ControllerPenduduk@edit')->name('penduduk.edit');
Route::patch('/penduduk/{id}', 'ControllerPenduduk@update')->name('penduduk.update');
Route::delete('/penduduk/{id}', 'ControllerPenduduk@destroy')->name('penduduk.destroy');

Route::get('/anggotakeluarga/{id}', 'ControllerAnggotaKeluarga@index')->name('anggotakeluarga.index'); 
Route::get('/anggotakeluarga/{id}/create', 'ControllerAnggotaKeluarga@create')->name('anggotakeluarga.create');
Route::post('/anggotakeluarga/create', 'ControllerAnggotaKeluarga@store')->name('anggotakeluarga.store');

Route::get('/kartukeluarga', 'ControllerKartuKeluarga@index')->name('kartukeluarga.index');  
Route::get('/kartukeluarga/create', 'ControllerKartuKeluarga@create')->name('kartukeluarga.create');
Route::post('/kartukeluarga/create', 'ControllerKartuKeluarga@store')->name('kartukeluarga.store');
Route::get('/kartukeluarga/{id}', 'ControllerKartuKeluarga@show')->name('kartukeluarga.show');
Route::get('/kartukeluarga/{id}/edit', 'ControllerKartuKeluarga@edit')->name('kartukeluarga.edit');
Route::patch('/kartukeluarga/{id}', 'ControllerKartuKeluarga@update')->name('kartukeluarga.update');
Route::delete('/kartukeluarga/{id}', 'ControllerKartuKeluarga@destroy')->name('kartukeluarga.destroy');