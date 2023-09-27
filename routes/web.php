<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\ProfileController;
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
Route::get('/cart', [CustomerController::class, 'cart'])->name('cart');
Route::get('/productpage', [CustomerController::class, 'productPage'])->name('product.page');

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
});
