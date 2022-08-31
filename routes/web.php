<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('store',[ProductController::class,'store'])->name('store');
Route::get('products/table',[ProductController::class,'table'])->name('products.table');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('update/{id}',[ProductController::class,'update'])->name('update');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::get('products/details/{id}',[ProductController::class,'details'])->name('products.details');
