<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\ProductController;
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

Route::group([
    'prefix' => 'customer'
], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/login', [AuthController::class, 'indexLogin'])->name('customer.login');
    Route::get('/product', [ProductController::class, 'indexList'])->name('customer.product');
    Route::get('/product/detail', [ProductController::class, 'indexDetail'])->name('customer.product.detail');
    Route::get('/order/cart', [OrderController::class, 'indexCart'])->name('customer.order.cart');
    Route::get('/order/checkout', [OrderController::class, 'indexCheckout'])->name('customer.order.checkout');
    Route::get('/order/confirmation', [OrderController::class, 'indexConfirmation'])->name('customer.order.confirmation');
});
Route::group([
    'prefix' => 'admin'
], function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'indexLogin'])->name('admin.login');
    Route::get('/register', [\App\Http\Controllers\Admin\AuthController::class, 'indexRegister'])->name('admin.register');
    Route::get('/product', [\App\Http\Controllers\Admin\ProductController::class, 'indexList'])->name('admin.product');
    Route::get('/product/detail', [\App\Http\Controllers\Admin\ProductController::class, 'indexDetail'])->name('admin.product.detail');
    Route::get('/product/create', [\App\Http\Controllers\Admin\ProductController::class, 'indexCreate'])->name('admin.product.create');
    Route::get('/category', [CategoryController::class, 'indexList'])->name('admin.category')
;    Route::get('/category/detail', [CategoryController::class, 'indexDetail'])->name('admin.category.detail');
    Route::get('/category/create', [CategoryController::class, 'indexCreate'])->name('admin.category.create');


});
