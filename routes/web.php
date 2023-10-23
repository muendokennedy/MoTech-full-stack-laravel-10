<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CustomerController::class, 'index'])->name('home');
Route::get('/about', [CustomerController::class, 'about'])->name('about');
Route::get('/products', [CustomerController::class, 'products'])->name('products');
Route::get('/contact', [CustomerController::class, 'contact'])->name('contact');
Route::get('/productpage/{product}', [CustomerController::class, 'productPage'])->name('product.page');

require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/stock', [AdminController::class, 'stock'])->name('admin.stock');
    Route::get('/clientinfo', [AdminController::class, 'clientinfo'])->name('admin.client');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    // The routes for storing the product into the database
    Route::post('/addnewproduct', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');

});

// Route to receive the add to cart AJAX request
Route::post('/products/add/cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::middleware('auth')->group(function(){
    Route::get('/cart', [CartController::class, 'showCartItems'])->name('cart');
});
