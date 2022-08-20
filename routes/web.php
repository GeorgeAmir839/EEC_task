<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PharmacyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front-end
Route::get('/', [HomeController::class,'index'])->name('home');
// Route::post('/products/search', [ProductController::class,'products_search'])->name('products.search');
Route::post('/products/ajax/search', [ProductController::class,'products_ajax_search'])->name('products.ajax.search');
Route::get('/products/search', [ProductController::class,'product_search'])->name('products.search');
// Products Routes
Route::resource('products', ProductController::class);


// Pharmacies Routes
Route::resource('pharmacies', PharmacyController::class);
