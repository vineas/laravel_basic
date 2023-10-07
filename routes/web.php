<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route untuk menampilkan daftar produk
Route::get('/products', [ProductController::class, 'index']);

// Route untuk menampilkan formulir tambah produk
Route::get('/products/create', [ProductController::class, 'create']);

// Route untuk menyimpan produk baru
Route::post('/products', [ProductController::class, 'store']);

// Route untuk menampilkan detail produk berdasarkan ID
Route::get('/products/{id}', [ProductController::class, 'show']);

// Route untuk menampilkan formulir edit produk berdasarkan ID
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// Route untuk memperbarui produk berdasarkan ID
Route::put('/products/{id}', [ProductController::class, 'update']);

// Route untuk menghapus produk berdasarkan ID
Route::delete('/products/{id}', [ProductController::class, 'destroy']);