<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');
Route::get('/shops/create', [ShopController::class, 'create'])->name('shops.create');
Route::post('/shops', [ShopController::class, 'store'])->name('shops.store');
Route::get('shops{shop}', [ShopController::class, 'show'])->name('shop.show');
Route::get('shops{shop}/edit', [ShopController::class, 'edit'])->name('shop.edit');
Route::put('/shops{shop}', [ShopController::class, 'update'])->name('shops.update');
Route::delete('/shops{shop}', [ShopController::class, 'destroy'])->name('shops.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('products{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('products{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('orders{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('orders{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/guarantee', 'guarantee')->name('guarantee');
Route::view('/agreement', 'agreement')->name('agreement');
Route::view('/sitemap', 'sitemap')->name('sitemap');
// 404 error page


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
