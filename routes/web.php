<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product/list', [ProductController::class, 'productlist'])->name('productlist');
Route::get('/product/create', [ProductController::class, 'productCreate'])->name('create');

Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('edit');

Route::get('/product/details/{id}', [ProductController::class, 'productDetails'])->name('details');
