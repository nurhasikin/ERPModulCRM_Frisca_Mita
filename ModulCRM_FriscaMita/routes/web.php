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
    return view('/auth/login');
});
Route::get('/beranda', function () {
    return view('beranda');
});


Route::resource('pelanggan','PelangganController');
Route::get('pelanggan/delete/{id_pelanggan}','PelangganController@delete');
Route::post('pelanggan/update','PelangganController@update');

Route::resource('pembelian','PembelianController');
Route::get('pembelian/delete/{id}','PembelianController@delete');
Route::post('pembelian/update','PembelianController@update');

Route::resource('kinerjasales','KinerjaSalesController');
Route::get('kinerjasales/delete/{id}','KinerjaSalesController@delete');
Route::post('kinerjasales/update','KinerjaSalesController@update');

Route::resource('invoice', 'InvoiceController');
Route::get('invoice/delete/{id}', 'InvoiceController@delete');
Route::Post('invoice/update', 'InvoiceController@update');

Route::resource('promo', 'PromoController');
Route::get('promo/delete/{id}', 'PromoController@delete');
Route::Post('promo/update', 'PromoController@update');

Route::resource('order', 'OrderController');
Route::get('order/delete/{id}', 'OrderController@delete');
Route::Post('order/update', 'OrderController@update');

Route::resource('karyawan', 'KaryawanController');
Route::post('karyawan/update', 'KaryawanController@update');
Route::get('karyawan/delete/{id_karyawan}', 'KaryawanController@delete');


Route::resource('kontrak', 'KontrakController');
Route::post('kontrak/update', 'KontrakController@update');
Route::get('kontrak/delete/{id_kontrak}', 'KontrakController@delete');


Route::resource('absensi', 'AbsensiController');
Route::post('absensi/update', 'AbsensiController@update');
Route::get('absensi/delete/{id_absensi}', 'AbsensiController@delete');


Route::resource('gaji', 'GajiController');
Route::post('gaji/update', 'GajiController@update');
Route::get('gaji/delete/{id_gaji}', 'GajiController@delete');


Route::resource('training', 'TrainingController');
Route::post('training/update', 'TrainingController@update');
Route::get('training/delete/{id_training}', 'TrainingController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
