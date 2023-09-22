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

Route::get('/login/customer', function(){
    return view('login');
})->name('customer.login');
Route::get('/signup/customer', function(){
    return view('signup');
})->name('customer.signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
