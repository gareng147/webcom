<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/testimoni', function () {
    return view('testimoni'); 
});



Route::get('/marketplace', [ProductController::class, 'index']);


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/api/product/{id}', [ProductController::class, 'getProduct'])->name('product.api');

use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.product.store');


// Route untuk menampilkan form edit produk
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');

Route::prefix('admin')->name('admin.')->group(function() {
    // Dashboard Admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Produk Routes
    Route::get('products', [ProductController::class, 'index'])->name('products.index'); // Menampilkan semua produk (admin)
    
    // Menambahkan produk baru
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
    
    // Menampilkan form edit produk
    Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    
    // Mengupdate produk
    Route::put('products/{product}', [ProductController::class, 'update'])->name('product.update');
  
    // Menghapus produk
    // Route untuk menghapus produk
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');