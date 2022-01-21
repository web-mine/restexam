<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DinnerTableController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLineController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('products', ProductController::class);
Route::resource('dinner_tables', DinnerTableController::class);
Route::resource('orders', OrderController::class);
Route::resource('orders.order_lines', OrderLineController::class)->shallow();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
