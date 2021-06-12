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



Route::get('/login', 'AuthController@login')->name('auth-login');
Route::post('/login-logic', 'AuthController@loginLogic')->name('loginLogic');
Route::get('/register', 'AuthController@register')->name('auth.register');
Route::post('/register-logic', 'AuthController@registerLogic')->name('registerLogic');

Route::get('/', 'HomeController@home')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/alternatif', 'AlternatifController@index')->name('alternatif-index');
Route::get('/alternatif-detail', 'AlternatifController@detail')->name('alternatif-detail');

Route::get('/informasi', 'InformasiController@index')->name('informasi-index');

Route::get('/kriteria', 'KriteriaController@index')->name('kriteria-index');
Route::get('/detail-kriteria', 'KriteriaController@detail')->name('kriteria-detail');

Route::get('/laporan', 'LaporanController@index')->name('laporan-index');

Route::get('/seleksi', 'SeleksiController@index')->name('seleksi-index');

Route::get('/logout', 'AuthController@logout')->name('auth-logout');
