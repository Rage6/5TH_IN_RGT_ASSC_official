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
  Route::post('registration/submit',[App\Http\Controllers\ReunionController::class,'post'])->name('reunion.submit');
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
    Route::get('edit-profile', [App\Http\Controllers\HomeController::class,'edit_profile_index'])->name('profile.edit');
    Route::post('edit-profile-change', [App\Http\Controllers\HomeController::class,'edit_profile_change'])->name('profile.edit.change');
    Route::get('edit-password', [App\Http\Controllers\HomeController::class,'edit_password_index'])->name('password.edit');
    Route::post('edit-password-change', [App\Http\Controllers\HomeController::class,'edit_password_change'])->name('password.edit.change');
  });

  Route::middleware('access')->group(function() {

    Route::prefix('/admin')->group(function() {
      Route::get('', [App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
      Route::get('member-list', [App\Http\Controllers\AdminController::class,'index'])->name('admin.members');
      // // For uploading the casualties
      // Route::get('upload-casualties', [App\Http\Controllers\AdminController::class,'upload_all_casualties']);
      // // For uploading the recipients
      // Route::get('upload-recipients', [App\Http\Controllers\AdminController::class,'upload_all_recipients']);
    });

    Route::middleware(['permission:Add A New Member'])->group(function() {
      Route::get('new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_index'])->name('new.member.index');
      Route::post('add-new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_post'])->name('new.member.post');
    });

    Route::middleware(['permission:Edit A Member'])->group(function() {
      Route::get('edit-bobcat', [App\Http\Controllers\AdminController::class,'all_members'])->name('edit.member.list');
      Route::get('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_index'])->name('edit.member.index');
      Route::post('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_post'])->name('edit.member.post');
    });

    Route::middleware(['permission:Delete A Member'])->group(function() {
      Route::get('delete-bobcat', [App\Http\Controllers\AdminController::class,'all_members'])->name('delete.member.list');
      Route::get('delete-bobcat/{id}',[App\Http\Controllers\AdminController::class,'delete_member_index'])->name('delete.member.index');
      Route::post('delete-bobcat/{id}',[App\Http\Controllers\AdminController::class,'delete_member_post'])->name('delete.member.post');
    });

    Route::middleware(['permission:Edit Casualty Records'])->group(function() {
      Route::get('edit-casualties', [App\Http\Controllers\AdminController::class,'all_casualties'])->name('edit.casualty.list');
      Route::get('edit-casualty/{id}',[App\Http\Controllers\AdminController::class,'edit_casualty_index'])->name('edit.casualty.index');
      Route::post('edit-casualty/{id}/post',[App\Http\Controllers\AdminController::class,'edit_casualty_post'])->name('edit.casualty.post');
    });

    Route::middleware(['permission:Assign Roles To Members'])->group(function() {
      // Lists all members IOT select a member and change their roles
      Route::get('assign-roles', [App\Http\Controllers\AdminController::class,'all_members'])->name('admin.roles');
      // Show which roles that a certain member is assigned with
      Route::get('assign-roles/{id}', [App\Http\Controllers\AdminController::class,'member_roles'])->name('admin.assign');
      // Show which roles that a certain member is assigned with
      Route::post('assign-roles/{id}', [App\Http\Controllers\AdminController::class,'assign_roles'])->name('admin.assign');
    });

    Route::middleware(['permission:Add An Event'])->group(function() {
      Route::get('add-event',[App\Http\Controllers\AdminController::class,'add_event_index'])->name('events.add');
      Route::post('add-event',[App\Http\Controllers\AdminController::class,'add_event_post'])->name('events.add');
    });

    Route::middleware(['permission:Edit An Event'])->group(function() {
      // Event
      Route::get('edit-event', [App\Http\Controllers\AdminController::class,'all_events'])->name('edit.event.list');
      Route::get('edit-event/{id}',[App\Http\Controllers\AdminController::class,'edit_event_index'])->name('edit.event.index');
      Route::post('edit-event/{id}',[App\Http\Controllers\AdminController::class,'edit_event_post'])->name('edit.event.post');
      // Subevent
      Route::get('add-subevent/{event_id}',[App\Http\Controllers\AdminController::class,'add_subevent_index'])->name('subevent.add');
      Route::post('add-subevent/{event_id}/post',[App\Http\Controllers\AdminController::class,'add_subevent_post'])->name('subevent.add.post');
      Route::get('edit-subevent/{event_id}/{id}',[App\Http\Controllers\AdminController::class,'edit_subevent_index'])->name('subevent.edit');
      Route::post('edit-subevent/{event_id}/{id}/post',[App\Http\Controllers\AdminController::class,'edit_subevent_post'])->name('subevent.edit.post');
      Route::get('delete-subevent/{event_id}/{id}',[App\Http\Controllers\AdminController::class,'delete_subevent_index'])->name('subevent.delete');
      Route::post('delete-subevent/{event_id}/{id}/post',[App\Http\Controllers\AdminController::class,'delete_subevent_post'])->name('subevent.delete.post');
    });

    Route::middleware(['permission:Delete An Event'])->group(function() {
      Route::get('delete-event', [App\Http\Controllers\AdminController::class,'all_events'])->name('delete.event.list');
      Route::get('delete-event/{id}',[App\Http\Controllers\AdminController::class,'delete_event_index'])->name('delete.event.index');
      Route::post('delete-event/{id}',[App\Http\Controllers\AdminController::class,'delete_event_post'])->name('delete.event.post');
    });
  });

  Route::middleware(['permission:See Payment History'])->group(function() {
    Route::get('payment-history',[App\Http\Controllers\AdminController::class,'payment_history_index'])->name('payment.history');
  });

  Route::middleware(['permission:See Membership Applicants'])->group(function() {
    Route::get('membership-applicant-list',[App\Http\Controllers\AdminController::class,'membership_list_index'])->name('membership.list');
  });

  Route::middleware(['permission:See Reunion Applicants'])->group(function() {
    Route::get('reunion-applicant-list',[App\Http\Controllers\AdminController::class,'reunion_list_index'])->name('reunion.list');
  });
});
