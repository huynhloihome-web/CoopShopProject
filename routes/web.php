<?php

use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\ShopOrderController;

Route::get('/gio-hang', [ShopCartController::class, 'index'])->name('coop-shop.cart');
Route::post('/gio-hang/xoa', [ShopCartController::class, 'remove'])->name('coop-shop.cart.remove');

Route::middleware('auth')->group(function () {
    Route::post('/dat-hang', [ShopOrderController::class, 'store'])->name('coop-shop.order.store');
});