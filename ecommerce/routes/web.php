<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'HomeIndex']);
Route::get('/checkout',[CheckoutController::class, 'Checkout']);
Route::get('/shop',[ShopController::class, 'ShopIndex']);
Route::get('/product',[ProductController::class, 'ProductIndex']);
Route::get('/contact',[ContactController::class, 'ContactIndex']);