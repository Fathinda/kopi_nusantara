<?php

use Illuminate\Support\Facades\Route;

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