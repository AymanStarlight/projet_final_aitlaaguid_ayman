<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Mail
Route::post('/mail', [MailController::class, 'store'])->name('mail.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::get('/backoffice', function () {
    return view('backoffice');
})->middleware(['auth', 'verified', 'role:admin|webmaster'])->name('backoffice');

Route::prefix('backoffice')->middleware(['auth', 'role:admin|webmaster'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/products/edit/{product}', [ProductController::class, 'update'])->name('product.edit');
    Route::delete('/products/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
});

Route::prefix('backoffice')->middleware(['auth', 'role:admin'])->group(function () {
    // Users
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::post('/users/webmaster/{user}', [UserController::class, 'webmaster'])->name('user.webmaster');
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])->name('user.delete');

    // Mails
    Route::get('/mails', [MailController::class, 'index'])->name('mail.index');
    Route::put('/mails/viewed/{mail}', [MailController::class, 'viewed'])->name('mail.viewed');
    Route::put('/mails/viewedT/{mail}', [MailController::class, 'viewedT'])->name('mail.viewedT');
    Route::delete('/mails/delete/{mail}', [MailController::class, 'destroy'])->name('mail.delete');
});

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

    // Comments
    Route::post('/product/comment/{product}', [CommentController::class, 'store'])->name('comment.store');
});

require __DIR__ . '/auth.php';