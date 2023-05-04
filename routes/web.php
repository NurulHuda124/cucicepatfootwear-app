<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
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
    return view('home');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lokasi', [App\Http\Controllers\LokasiController::class, 'index'])->name('lokasi');
Route::resource('customer', CustomerController::class)->middleware('auth');
Route::resource('/kategori', KategoriController::class)->middleware('auth');
Route::resource('/barang',BarangController::class)->middleware('auth');
Route::resource('transaksi', TransaksiController::class)->middleware('auth');
Route::get('barang/show/{id}', [App\Http\Controllers\BarangController::class, 'show']);
Route::get('barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit']);
Route::post('barang/update/{id}', [App\Http\Controllers\BarangController::class, 'update']);
Route::get('barang/destroy/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);
Route::get('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy']);
Route::get('transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::post('transaksi/update/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::get('transaksi/destroy/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
Route::get('transaksi/print', [App\Http\Controllers\TransaksiController::class, 'print']);