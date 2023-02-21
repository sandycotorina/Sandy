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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Satuan', 'SatuanController@index')->name('satuan.index');
Route::get('/BarangMasuk', 'TransaksiController@barangin')->name('transaksi.barangin');
Route::get('/Request', 'BarangController@request')->name('barang.request');
Route::get('/Add', 'BarangController@add')->name('barang.add');
Route::get('/EditBrand', 'BrandController@edit')->name('brand.edit');
Route::get('/EditKategori', 'KategoriController@edit')->name('kategori.edit');
Route::get('/Index', 'BarangController@index')->name('barang.index');
Route::get('/TampilkanStock', 'StockController@tampilkan')->name('stock.tampilkan');
Route::get('/BarangKeluar', 'TransaksiController@barangout')->name('transaksi.barangout');
