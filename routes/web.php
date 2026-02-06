<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;

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



   Route::get('/home',[MainController::class,'home'])->name('home');
Route::get('/product',[MainController::class,'product'])->name('product');
Route::get('/product/{slug}',[MainController::class,'cproduct'])->name('slug');

Route::get('/About',[AboutController::class,'index'])->name('about');
Route::get('/login',[AuthController::class,'index']);
Route::post('/login', [AuthController::class,'loginproses'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');





Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductController::class);
});



