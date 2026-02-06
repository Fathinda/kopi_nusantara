<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
>>>>>>> 1d01c7cbe1de0bf9d3a84149f439eed6c288ea4c

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('/home',[MainController::class,'home'])->name('home');
Route::get('/product',[MainController::class,'product'])->name('product');
Route::get('/About',[AboutController::class,'index'])->name('about');
Route::get('/login',[AuthController::class,'index']);
Route::post('/login', [AuthController::class,'loginproses'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);
