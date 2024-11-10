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

Route::get('/products', [ProductController::class, 'products']);

Route::post('/products/search', [ProductController::class, 'search'])->name('search');

Route::get('/products/{productId}', [ProductController::class, 'productId'])->name('productId');

Route::post('/products/{:productId}/update', [ProductController::class, 'update'])->name('update');

Route::get('/products/register', [ProductController::class, 'register'])->name('register');

Route::get('/products/{:productId}/delete', [ProductController::class, 'delete'])->name('delete');
