<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any','.*');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::POST('/products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::POST('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/customers',[CustomerController::class,'index'])->name('customers');
Route::get('/customers/show/{customer}',[CustomerController::class,'show'])->name('customer.show');
Route::get('/customers/{customer}',[CustomerController::class,'destroy'])->name('customer.delete');


Route::post('/orders/statuses/change', [OrderController::class, 'storeChangeStatus'])->name('order.status.change');

Route::get('/orders', [OrderController::class, 'pending'])->name('orders.index');
Route::get('/orders/loaded', [OrderController::class, 'loading'])->name('orders.loaded');
Route::get('/orders/dispatched', [OrderController::class, 'dispatched'])->name('orders.dispatched');
Route::get('/orders/delivered', [OrderController::class, 'delivered'])->name('orders.delivered');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
