<?php

use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProvinceController;
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

Route::get('/', [PeopleController::class, 'index']);

Route::resource('province', ProvinceController::class);
Route::resource('people', PeopleController::class);

