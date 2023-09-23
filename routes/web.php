<?php

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
