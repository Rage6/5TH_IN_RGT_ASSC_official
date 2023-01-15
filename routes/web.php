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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::prefix('/home')->group(function() {
  Route::get('', [App\Http\Controllers\HomeController::class,'index'])->name('home');
});

Route::prefix('reunion')->group(function() {
  Route::get('',[App\Http\Controllers\ReunionController::class,'index'])->name('reunion.index');
  Route::post('registration',[App\Http\Controllers\ReunionController::class,'post'])->name('reunion.register');
});

Route::prefix('history')->group(function() {
  Route::get('timeline',[App\Http\Controllers\HistoryController::class,'index'])->name('history.timeline');
});

Route::prefix('items')->group(function() {
  Route::get('',[App\Http\Controllers\ItemController::class,'index'])->name('items.all');
  Route::post('add-to-cart',[App\Http\Controllers\ItemController::class,'add'])->name('items.add');
  Route::get('cart',[App\Http\Controllers\ItemController::class,'cart'])->name('items.cart');
  Route::post('make-purchase',[App\Http\Controllers\ItemController::class,'purchase'])->name('items.purchase');
  Route::get('clear-cart',[App\Http\Controllers\ItemController::class,'clear'])->name('items.clear');
  Route::get('{item}',[App\Http\Controllers\ItemController::class,'show'])->name('items.single');
  // Route::post('submit-purchase',[App\Http\Controllers\ItemController::class,'submit'])->name('items.create');
});
