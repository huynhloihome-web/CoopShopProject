<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoopShopController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CartController;

Route::get('/', [CoopShopController::class, 'index'])->name('coop-shop.home');
Route::get('/danh-muc/{id}', [CoopShopController::class, 'category'])->name('coop-shop.category');

/* Route mới */
Route::get('/san-pham/{id}', [ProductDetailController::class, 'show'])->name('coop-shop.detail');

Route::get('/gio-hang', [CartController::class, 'index'])->name('coop-shop.cart');
Route::post('/gio-hang/them', [CartController::class, 'add'])->name('coop-shop.cart.add');
Route::post('/gio-hang/xoa', [CartController::class, 'remove'])->name('coop-shop.cart.remove');

Route::get('/dang-nhap', [CoopShopController::class, 'login'])->name('coop-shop.login');