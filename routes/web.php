<?php

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
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/login', [AuthController::class, 'indexLogin']);
    Route::get('/product', [ProductController::class, 'indexList']);
    Route::get('/product/detail', [ProductController::class, 'indexDetail']);
    Route::get('/order/cart', [OrderController::class, 'indexCart']);
    Route::get('/order/checkout', [OrderController::class, 'indexCheckout']);
    Route::get('/order/confirmation', [OrderController::class, 'indexConfirmation']);
});
Route::group([
    'prefix' => 'admin'
], function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'indexLogin']);
    Route::get('/register', [\App\Http\Controllers\Admin\AuthController::class, 'indexRegister']);
    Route::get('/product', [\App\Http\Controllers\Admin\ProductController::class, 'indexList']);
    Route::get('/product/detail', [\App\Http\Controllers\Admin\ProductController::class, 'indexDetail']);

});
