<?php

use App\Http\Controllers\Admin\BrandController;
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
Route::get('/', function () {
    return redirect()->route('customer.index');
});
Route::group([
    'prefix' => 'customer'
], function () {
    Route::get('/index', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/contact', [CustomerController::class, 'indexContact'])->name('customer.contact');
    Route::get('/login', [AuthController::class, 'indexLogin'])->name('customer.login');
    Route::get('/product', [ProductController::class, 'indexList'])->name('customer.product');
    Route::get('/product/detail', [ProductController::class, 'indexDetail'])->name('customer.product.detail');
    Route::get('/order/cart', [OrderController::class, 'indexCart'])->name('customer.order.cart');
    Route::get('/order/checkout', [OrderController::class, 'indexCheckout'])->name('customer.order.checkout');
    Route::get('/order/confirmation', [OrderController::class, 'indexConfirmation'])->name('customer.order.confirmation');
});


Route::get('admin/register', [\App\Http\Controllers\Admin\AuthController::class, 'indexRegister'])->name('admin.register');
Route::group([
    'prefix' => 'admin'
], function () {

    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'indexLogin'])->name('admin.login');

    Route::group([
        'prefix' => 'product'
    ], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'indexList'])->name('admin.product');
        Route::get('/detail', [\App\Http\Controllers\Admin\ProductController::class, 'indexDetail'])->name('admin.product.detail');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'indexCreate'])->name('admin.product.create');
        Route::post('/post', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.post');
        Route::get('/edit/{id?}', [\App\Http\Controllers\Admin\ProductController::class, 'indexEdit'])->name('admin.product.edit.show');
        Route::post('/edit', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.product.edit');
        Route::get('/delete/{id?}', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('admin.product.delete');

    });

    Route::group([
        'prefix' => 'category'
    ], function () {
        Route::get('/', [CategoryController::class, 'indexList'])->name('admin.category');
        Route::get('/detail', [CategoryController::class, 'indexDetail'])->name('admin.category.detail');
        Route::get('/create', [CategoryController::class, 'indexCreate'])->name('admin.category.create');
        Route::get('/edit/{id?}', [CategoryController::class, 'indexEdit'])->name('admin.category.edit.show');
        Route::post('/post', [CategoryController::class, 'create'])->name('admin.category.post');
        Route::post('/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::get('/delete/{id?}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group([
        'prefix' => 'brand'
    ], function () {
        Route::get('/', [BrandController::class, 'indexList'])->name('admin.brand');
        Route::get('/detail', [BrandController::class, 'indexDetail'])->name('admin.brand.detail');
        Route::get('/create', [BrandController::class, 'indexCreate'])->name('admin.brand.create');
        Route::get('/edit/{id?}', [BrandController::class, 'indexEdit'])->name('admin.brand.edit.show');
        Route::post('/post', [BrandController::class, 'create'])->name('admin.brand.post');
        Route::post('/edit', [BrandController::class, 'edit'])->name('admin.brand.edit');
        Route::get('/delete/{id?}', [BrandController::class, 'delete'])->name('admin.brand.delete');
    });


});
