<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCOntroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CategoryController::class, 'index']);

Route::resource('category', CategoryController::class);
Route::resource('product', ProductCOntroller::class);

Route::prefix('/')->group(function () {
    Route::get('/', [PageController::class, 'homePage'])->name('home');
    Route::get('/detail/{id}', [PageController::class, 'detailPage'])->name('detail');
    Route::get('/shop', [PageController::class, 'shopPage'])->name('shop');
});
