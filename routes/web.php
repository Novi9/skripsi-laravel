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

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/login', 'AuthController@login')->name('auth-login');
    Route::get('/register', 'AuthController@register')->name('auth.register');
    Route::post('/login-logic', 'AuthController@loginLogic')->name('loginLogic');
    Route::post('/register-logic', 'AuthController@registerLogic')->name('registerLogic');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/logout', 'AuthController@logout')->name('auth-logout');
});

Route::group(['middleware' => ['auth', 'role:admin,alternatif']], function () {
    Route::get('/informasi', 'InformasiController@index')->name('informasi-index');

});

Route::group(['middleware' => ['auth', 'role:alternatif']], function () {
    Route::get('/alternatif-biodata', 'AlternatifController@biodata')->name('alternatif-biodata');
});

Route::group(['middleware' => ['auth', 'role:direktur,admin']], function () {
    Route::get('/laporan', 'LaporanController@index')->name('laporan-index');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/alternatif', 'AlternatifController@index')->name('alternatif-index');
    Route::get('/alternatif-detail', 'AlternatifController@detail')->name('alternatif-detail');
    Route::get('/kriteria', 'KriteriaController@index')->name('kriteria-index');
    Route::get('/detail-kriteria', 'KriteriaController@detail')->name('kriteria-detail');
    Route::get('/seleksi', 'SeleksiController@index')->name('seleksi-index');
});

Route::get('contoh-ui', function () {
    return view('pages.contoh-ui.contoh-ui');
});
