<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apis\ProductController;
use App\Http\Controllers\apis\LocationController;
use App\Http\Controllers\apis\OrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[App\Http\Controllers\apis\auth\RegisterController::class, 'register']);
Route::post('/login',[App\Http\Controllers\apis\auth\LoginController::class, 'login']);



Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');

Route::post('/order', [OrderController::class, 'store'])->name('orders.store');

Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');

