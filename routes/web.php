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
    return view('pages.home.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});

Route::get('/alternatif', function () {
    return view('pages.alternatif.index');
});

Route::get('/login', function () {
    return view('pages.auth.register');
});

Route::get('/informasi', function () {
    return view('pages.informasi.index');
});

Route::get('/kriteria', function () {
    return view('pages.kriteria.index');
});

Route::get('/kriteria', 'KriteriaController@index')->name('kriteria-index');
Route::get('/detail-kriteria', 'KriteriaController@detail')->name('kriteria-detail');

Route::get('/laporan', function () {
    return view('pages.laporan.index');
});

Route::get('/seleksi', function () {
    return view('pages.seleksi.index');
});

// Ini contohnya ya nak
Route::get('/input-pengajuan/items/{item_code}', 'InputController@getItem')->name('inputPengajuanGetItem');
