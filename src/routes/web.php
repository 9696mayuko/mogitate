<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SeasonController;

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

Route::get('/products', [ ProductsController::class,'getProducts']);
Route::get('/products/register',[SeasonController::class,'getRegister']);
Route::post('/products/upload',[ProductsController::class,'upload']);
Route::get('/products/detail/{product_id}',[ProductsController::class,'getDetail']);
Route::get('/products/search', [ProductsController::class, 'getSearch']);
Route::post('/products/search', [ProductsController::class, 'postSearch']);
Route::get('/products/{product_id}/delete', [ProductsController::class, 'postDelete']);
Route::post('/products/update', [ProductsController::class, 'postUpdate']);