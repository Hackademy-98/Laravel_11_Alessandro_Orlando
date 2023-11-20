<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/home',[UserController::class, 'home'])->name('user.home');

route::get('/products',[ProductController::class,'index'])->name('product.index');
route::get('/product/create',[ProductController::class,'create'])->name('product.create');
route::post('/product/store',[ProductController::class,'store'])->name('product.store');
route::get('/product/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
route::put('/product/update/{product}',[ProductController::class,'update'])->name('product.update');
route::delete('/product/delete/{product}',[ProductController::class,'destroy'])->name('product.destroy');

