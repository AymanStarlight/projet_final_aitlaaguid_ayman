<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

// Pages
Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/shop/{sort?}/{category?}', [HomeController::class, 'shop'])->name('shop.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/store/{product}', [CartController::class, 'store'])->name('cart.store');
    Route::put('/cart/increment/{product}', [CartController::class, 'increment'])->name('cart.increment');
    Route::put('/cart/decrement/{product}', [CartController::class, 'decrement'])->name('cart.decrement');
    Route::delete('/cart/delete/{product}', [CartController::class, 'destroy'])->name('cart.delete');
});

require __DIR__.'/auth.php';
