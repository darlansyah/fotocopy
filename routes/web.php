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

Route::get('dashboard','DashboardController@index')->name('indexdashboard');



// index Transaksi
Route:: get('transaksi/index','TransaksiController@index')->name('indextransaksi');
Route:: get('transaksi/index/{tanggal}','TransaksiController@index')->name('sindextransaksi');


Route:: get ('transaksi/tambah','TransaksiController@tambah')->name('tambahtransaksi');

Route:: post ('transaksi/simpan','TransaksiController@simpan')->name('simpantransaksi');
Route:: post ('transaksi/simpan/{tanggal}','TransaksiController@simpan')->name('ssimpantransaksi');


Route:: get ('transaksi/edit/{id}','TransaksiController@edit')->name('edittransaksi');
Route:: get ('transaksi/edit/{id}/{tanggal}','TransaksiController@edit')->name('sedittransaksi');


Route:: post('transaksi/update/{id}','TransaksiController@update')->name('updatetransaksi');
Route:: post('transaksi/update/{id}/{tanggal}','TransaksiController@update')->name('supdatetransaksi');

// soft datele
Route::get('transaksi/hapus/{id}','TransaksiController@hapus')->name('hapustransaksi');
Route::get('transaksi/tong_sampah','TransaksiController@tong_sampah')->name('tong_sampahtransaksi');
Route::get('transaksi/kembalikan/{id}','TransaksiController@kembalikan')->name('ktong_sampahtransaksi');
Route::get ('transaksi/hapus_permanen/{id}','TransaksiController@hapus_permanen')->name('phapusTransaksi');
