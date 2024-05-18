<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Ensure that only authenticated users can access the 'add-to-cart' route
Route::middleware(['auth'])->group(function () {
    Route::get('add-to-cart/{product}', [CartController::class, 'add'])->name('cart.add');
});

Route::get('cart', [CartController::class, 'index'])->name('cart.index');

Route::get('cart/destroy/{itemId}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('cart/update/{itemId}', [CartController::class, 'update'])->name('cart.update');

Route::get('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::get('paypal/checkout', [PayPalController::class, 'getExpressCheckout'])->name('paypal.checkout');

Route::get('paypal/checkout-success', [PayPalController::class, 'getExpressCheckoutSuccess'])->name('paypal.success');

Route::get('paypal/checkout-cancel', [PayPalController::class, 'cancelPage'])->name('paypal.cancel');

Route::middleware(['auth'])->group(function () {
    Route::get('shops', [ShopController::class, 'create'])->name('shops.create');
    Route::post('shops', [ShopController::class, 'store'])->name('shops.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );

    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'product',
        \App\Http\Controllers\ProductController::class
    );

    Route::resource(
        'orders',
        \App\Http\Controllers\OrderController::class
    );

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
