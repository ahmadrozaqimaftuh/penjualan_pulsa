<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCounterController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukPulsaController;
use App\Http\Controllers\TransaksiPulsaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::middleware('admin')->group(function () {

    
Route::resource('admin_counter', App\Http\Controllers\AdminCounterController::class);
Route::resource('pelanggan', App\Http\Controllers\PelangganController::class);
Route::resource('produk_pulsa', App\Http\Controllers\ProdukPulsaController::class);
Route::resource('transaksi_pulsa', App\Http\Controllers\TransaksiPulsaController::class);
Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);

});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin');

Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});