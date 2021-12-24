<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pelanggans', PelangganController::class);
Route::get('/search', [PelangganController::class, 'search'])->name('search');
Route::resource('petugas', PetugasController::class);
Route::get('/search', [PetugasController::class, 'search'])->name('search');
Route::resource('products', ProductController::class);
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::resource('transaksi', TransaksiController::class);
Route::get('/search', [TransaksiController::class, 'search'])->name('search');
Route::get('/transaksi/{id}/report', [TransaksiController::class, 'report']);
