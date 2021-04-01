<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'storeUser']);

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
