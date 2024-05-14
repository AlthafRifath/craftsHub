<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

});
