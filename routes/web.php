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

Route::prefix('registration')->group(function() {
  Route::get('',[App\Http\Controllers\RegistrationController::class,'index'])->name('registration.index');
  Route::post('submit-membership',[App\Http\Controllers\RegistrationController::class,'post'])->name('registration.post');
});

Route::prefix('donations')->group(function() {
  Route::get('',[App\Http\Controllers\DonationController::class, 'index'])->name('donation.index');
});

Route::prefix('newsletter')->group(function() {
  Route::get('',[App\Http\Controllers\NewsletterController::class,'index']);
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
  // Route::get('{item}',[App\Http\Controllers\ItemController::class,'show'])->name('items.single');
  // Route::post('submit-purchase',[App\Http\Controllers\ItemController::class,'submit'])->name('items.create');
});

Route::middleware('auth')->group(function() {

  Route::prefix('/home')->group(function() {
    Route::get('', [App\Http\Controllers\HomeController::class,'index'])->name('home');
  });

  Route::middleware('access')->group(function() {

    Route::prefix('/admin')->group(function() {
      Route::get('', [App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
      Route::get('member-list', [App\Http\Controllers\AdminController::class,'index'])->name('admin.members');
    });

    Route::middleware(['permission:Add A New Member'])->group(function() {
      Route::get('new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_index'])->name('new.member.index');
      Route::post('add-new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_post'])->name('new.member.post');
    });

    Route::middleware(['permission:Edit A Member'])->group(function() {
      Route::get('edit-bobcat', [App\Http\Controllers\AdminController::class,'all_members'])->name('admin.roles');
      Route::get('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_index'])->name('edit.member.index');
      Route::post('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_post'])->name('edit.member.post');
    });

    Route::middleware(['permission:Assign Roles To Members'])->group(function() {
      // Lists all members IOT select a member and change their roles
      Route::get('assign-roles', [App\Http\Controllers\AdminController::class,'all_members'])->name('admin.roles');
      // Show which roles that a certain member is assigned with
      Route::get('assign-roles/{id}', [App\Http\Controllers\AdminController::class,'member_roles'])->name('admin.assign');
      // Show which roles that a certain member is assigned with
      Route::post('assign-roles/{id}', [App\Http\Controllers\AdminController::class,'assign_roles'])->name('admin.assign');
    });
  });
});
