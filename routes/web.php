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
  Route::get('',[App\Http\Controllers\NewsletterController::class,'index'])->name('newsletter.index');
});

Route::prefix('history')->group(function() {
  Route::get('origin-and-tradition',[App\Http\Controllers\HistoryController::class,'origin'])->name('origin.index');
  Route::get('timeline',[App\Http\Controllers\HistoryController::class,'index'])->name('history.timeline');
  Route::prefix('topic')->group(function() {
    Route::prefix('vietnam-history')->group(function() {
      Route::get('preface',[App\Http\Controllers\HistoryTopicController::class,'vietnam_preface'])->name('vietnam.preface');
      Route::get('1966',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1966'])->name('vietnam.1966');
      Route::get('1967',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1967'])->name('vietnam.1967');
      Route::get('1968',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1968'])->name('vietnam.1968');
      Route::get('1969',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1969'])->name('vietnam.1969');
      Route::get('1970',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1970'])->name('vietnam.1970');
      Route::get('1971',[App\Http\Controllers\HistoryTopicController::class,'vietnam_1971'])->name('vietnam.1971');
      Route::get('glossary','HistoryTopicController@vietnam_glossary');
      Route::get('maps','AlbumController@vietnam_maps');
    });
    Route::get('ben-cui-battle',[App\Http\Controllers\HistoryTopicController::class,'ben_cui_battle'])->name('bencui.main');
    Route::get('ben-cui-forum',[App\Http\Controllers\HistoryTopicController::class,'ben_cui_forum'])->name('bencui.forum');
    Route::get('michelin-rubber-plant-battle',[App\Http\Controllers\HistoryTopicController::class,'michelin_rubber_plant_battle'])->name('michelin.battle');
    Route::get('the-rifle-and-the-myth',[App\Http\Controllers\HistoryTopicController::class,'the_rifle_and_the_myth'])->name('rifle.myth');
  });
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

Route::prefix('memorials')->group(function() {
  Route::get('casualties',[App\Http\Controllers\MemorialController::class,'index'])->name('casualties.all');
  Route::post('casualty-search',[App\Http\Controllers\MemorialController::class,'search'])->name('casualties.search');
  Route::get('{id}',[App\Http\Controllers\MemorialController::class,'show'])->name('casualties.select');
});

Route::prefix('deceased-members')->group(function() {
  Route::get('',[App\Http\Controllers\DeceasedController::class,'index'])->name('deceased.all');
  Route::post('search',[App\Http\Controllers\DeceasedController::class,'search'])->name('deceased.search');
  Route::get('{id}',[App\Http\Controllers\DeceasedController::class,'show'])->name('deceased.select');
});

Route::prefix('medal-of-honor')->group(function() {
  Route::get('recipients',[App\Http\Controllers\RecipientController::class,'index'])->name('recipients.all');
  Route::post('recipient-search',[App\Http\Controllers\RecipientController::class,'search'])->name('recipients.search');
  Route::get('recipient/{id}',[App\Http\Controllers\RecipientController::class,'show'])->name('recipients.select');
});

// Retrieves a 'current' image from the 'storage' directory
Route::get('images/current/{filename}', function($filename){
     $storagePath = storage_path('app/public/images/current/' . $filename);
        return response()->file($storagePath);
});

// Retrieves a 'veteran' image from the 'storage' directory
Route::get('images/veteran/{filename}', function($filename){
     $storagePath = storage_path('app/public/images/veteran/' . $filename);
        return response()->file($storagePath);
});

// Retrieves an 'items' image from the 'storage' directory
Route::get('images/items/{filename}', function($filename){
     $storagePath = storage_path('app/public/images/items/' . $filename);
        return response()->file($storagePath);
});

// Retrieves an 'event' image from the 'storage' directory
Route::get('images/events/{filename}', function($filename){
     $storagePath = storage_path('app/public/images/events/' . $filename);
        return response()->file($storagePath);
});

// Retrieves an 'event' image from the 'storage' directory
Route::get('images/events/subevents/{filename}', function($filename){
     $storagePath = storage_path('app/public/images/events/subevents/' . $filename);
        return response()->file($storagePath);
});

// Retrieves a 'bulletin' pdf file from the 'storage' directory
Route::get('bulletins/{filename}', function($filename){
     $storagePath = storage_path('app/public/bulletins/' . $filename);
        return response()->file($storagePath);
});

Route::middleware('auth')->middleware('expiration')->group(function() {

  Route::prefix('/home')->group(function() {
    // Enter the homepage
    Route::get('', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    // See all Bobcats
    Route::get('list-of-bobcats', [App\Http\Controllers\HomeController::class,'bobcat_list_index'])->name('bobcat.list.index');
    // See one Bobcat's profiles
    Route::get('profile/{id}', [App\Http\Controllers\HomeController::class,'bobcat_profile_index'])->name('bobcat.profile.index');
    // See the staff of the Bobcat organization
    Route::get('contact-us', [App\Http\Controllers\HomeController::class,'bobcat_staff_index'])->name('staff.index');
    // See all online personal payments to the club in the past
    Route::get('personal-payments', [App\Http\Controllers\HomeController::class,'bobcat_payment_index'])->name('payments.index');
    // Editing the user's profile
    Route::get('edit-profile', [App\Http\Controllers\HomeController::class,'edit_profile_index'])->name('profile.edit');
    Route::post('edit-profile-change', [App\Http\Controllers\HomeController::class,'edit_profile_change'])->name('profile.edit.change');
    // Prepare to add/edit a link
    Route::get('add-link-to-profile', [App\Http\Controllers\HomeController::class,'profile_link_new'])->name('profile.link.new');
    // Add a new profile link
    Route::post('add-profile-link', [App\Http\Controllers\HomeController::class,'profile_link_new_post'])->name('profile.link.add');
    // Prepare to edit/delete a link
    Route::get('edit-or-delete-profile-link/{link_id}', [App\Http\Controllers\HomeController::class,'profile_link_existing'])->name('profile.link.view');
    // Edit a link
    Route::post('edit-profile-link/{link_id}', [App\Http\Controllers\HomeController::class,'profile_link_change'])->name('profile.link.change');
    // Delete a link
    Route::get('delete-profile-link/{link_id}', [App\Http\Controllers\HomeController::class,'profile_link_delete'])->name('profile.link.delete');
    Route::get('delete-personal-image/{img_type}', [App\Http\Controllers\HomeController::class,'image_personal_index'])->name('delete.personal.image.index');
    Route::post('delete-personal-image-complete{img_type}', [App\Http\Controllers\HomeController::class,'image_personal_delete'])->name('delete.personal.image.complete');
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
      // For uploading each casualty's conflict_id
      // Route::get('update-conflict-id', [App\Http\Controllers\AdminController::class,'update_conflict_id']);
    });

    Route::middleware(['permission:Add A New Member'])->group(function() {
      Route::get('new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_index'])->name('new.member.index');
      Route::post('add-new-bobcat',[App\Http\Controllers\AdminController::class,'add_member_post'])->name('new.member.post');
    });

    Route::middleware(['permission:Edit A Member'])->group(function() {
      // See a list of members for editin
      Route::get('edit-bobcat-list/{search_type?}', [App\Http\Controllers\AdminController::class,'all_members'])->name('edit.member.list');
      // Prepare to edit a single member's info
      Route::get('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_index'])->name('edit.member.index');
      // Edit a single member's info
      Route::post('edit-bobcat/{id}',[App\Http\Controllers\AdminController::class,'edit_member_post'])->name('edit.member.post');
      // Prepare to delete a member's image
      Route::get('edit-bobcat/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_member_index'])->name('image.member.index');
      // Delete a member's image
      Route::post('edit-bobcat/{id}/delete-image/member/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_member_delete'])->name('image.member.delete');
      // Prepare to edit a member's fee deadline
      Route::get('edit-bobcat/{id}/edit-deadline',[App\Http\Controllers\AdminController::class,'edit_member_deadline_index'])->name('edit.member.deadline');
      // Edit member as either permanent, nonmember, or temporary status
      Route::post('edit-bobcat/{id}/edit-deadline/permanent',[App\Http\Controllers\AdminController::class,'edit_member_deadline_permanent'])->name('edit.member.permanent');
      Route::post('edit-bobcat/{id}/edit-deadline/nonmember',[App\Http\Controllers\AdminController::class,'edit_member_deadline_nonmember'])->name('edit.member.nonmember');
      Route::post('edit-bobcat/{id}/edit-deadline/expiration-date',[App\Http\Controllers\AdminController::class,'edit_member_deadline_manual'])->name('edit.member.manual');
      // Prepare to add new timespan of a member in a Bobcat unit
      Route::get('edit-bobcat/{id}/add-new-timespan',[App\Http\Controllers\AdminController::class,'add_member_timespan_index'])->name('add.member.timespan.index');
      // Add new timespan of a member in a Bobcat unit
      Route::post('edit-bobcat/{id}/add-new-timespan-complete',[App\Http\Controllers\AdminController::class,'add_member_timespan_post'])->name('add.member.timespan.post');
      // Prepare to edit the timespan of a member in a Bobcat unit
      Route::get('edit-bobcat/{id}/change-timespan/{timespan_id}',[App\Http\Controllers\AdminController::class,'edit_member_timespan_index'])->name('edit.member.timespan.index');
      // Edit the timespan of a member in a Bobcat unit
      Route::post('edit-bobcat/{id}/change-timespan-complete/{timespan_id}',[App\Http\Controllers\AdminController::class,'edit_member_timespan_post'])->name('edit.member.timespan.post');
      // Delete the timespan of a member in a Bobcat unit
      Route::get('edit-bobcat/{id}/delete-timespan/{timespan_id}',[App\Http\Controllers\AdminController::class,'delete_member_timespan'])->name('edit.member.timespan.delete');
    });

    Route::middleware(['permission:See Nonmembers'])->group(function() {
      Route::get('see-nonmembers', [App\Http\Controllers\AdminController::class,'all_nonmembers'])->name('edit.nonmember.list');
    });

    Route::middleware(['permission:Delete A Nonmember'])->group(function() {
      Route::get('delete-bobcat', [App\Http\Controllers\AdminController::class,'all_nonmembers'])->name('delete.member.list');
      Route::get('delete-bobcat/{id}',[App\Http\Controllers\AdminController::class,'delete_member_index'])->name('delete.member.index');
      Route::post('delete-bobcat/{id}',[App\Http\Controllers\AdminController::class,'delete_member_post'])->name('delete.member.post');
    });

    Route::middleware(['permission:Edit Casualty Records'])->group(function() {
      Route::get('edit-casualties', [App\Http\Controllers\AdminController::class,'all_casualties'])->name('edit.casualty.list');
      Route::get('edit-casualty/{id}/{next_route}',[App\Http\Controllers\AdminController::class,'edit_casualty_index'])->name('edit.casualty.index');
      Route::post('edit-casualty/{id}/post/{next_route}',[App\Http\Controllers\AdminController::class,'edit_casualty_post'])->name('edit.casualty.post');
      Route::post('edit-casualty/{id}/disable',[App\Http\Controllers\AdminController::class,'edit_casualty_disable'])->name('edit.casualty.disable');
      // Prepare to delete a casualty's image
      Route::get('edit-casualty/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_casualty_index'])->name('image.casualty.index');
      // Delete a member's image
      Route::post('edit-casualty/{id}/delete-image/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_casualty_delete'])->name('image.casualty.delete');
      // To add, edit, or delete casualty links
      Route::get('add-casualty-link/{id}',[App\Http\Controllers\AdminController::class,'add_casualty_link_index'])->name('add.casualty.link.index');
      Route::post('add-casualty-link/{id}/post',[App\Http\Controllers\AdminController::class,'add_casualty_link_post'])->name('add.casualty.link.post');
      Route::get('edit-casualty-link/{id}/{linkId}',[App\Http\Controllers\AdminController::class,'edit_casualty_link_index'])->name('edit.casualty.link.index');
      Route::post('edit-casualty-link/{id}/{linkId}/post',[App\Http\Controllers\AdminController::class,'edit_casualty_link_post'])->name('edit.casualty.link.post');
      Route::get('delete-casualty-link/{id}/{linkId}',[App\Http\Controllers\AdminController::class,'delete_casualty_link_index'])->name('delete.casualty.link.index');
      Route::post('delete-casualty-link/{id}/{linkId}/post',[App\Http\Controllers\AdminController::class,'delete_casualty_link_post'])->name('delete.casualty.link.post');
    });

    Route::middleware(['permission:Edit MOH Recipient Records'])->group(function() {
      Route::get('edit-recipients', [App\Http\Controllers\AdminController::class,'all_recipients'])->name('edit.recipient.list');
      Route::get('edit-recipients/{id}', [App\Http\Controllers\AdminController::class,'edit_recipient_index'])->name('edit.recipient.index');
      Route::post('edit-recipients/{id}/post', [App\Http\Controllers\AdminController::class,'edit_recipient_post'])->name('edit.recipient.post');
      Route::get('edit-recipient/{id}/disable',[App\Http\Controllers\AdminController::class,'edit_recipient_disable'])->name('edit.recipient.disable');
      // Prepare to delete a casualty's image
      Route::get('edit-recipient/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_recipient_index'])->name('image.recipient.index');
      // Delete a member's image
      Route::post('edit-recipient/{id}/delete-image/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_recipient_delete'])->name('image.recipient.delete');
      // To add, edit, or delete recipient links
      Route::get('add-recipient-link/{id}',[App\Http\Controllers\AdminController::class,'add_recipient_link_index'])->name('add.recipient.link.index');
      Route::post('add-recipient-link/{id}/post',[App\Http\Controllers\AdminController::class,'add_recipient_link_post'])->name('add.recipient.link.post');
      Route::get('edit-recipient-link/{id}/{linkId}',[App\Http\Controllers\AdminController::class,'edit_recipient_link_index'])->name('edit.recipient.link.index');
      Route::post('edit-recipient-link/{id}/{linkId}/post',[App\Http\Controllers\AdminController::class,'edit_recipient_link_post'])->name('edit.recipient.link.post');
      Route::get('delete-recipient-link/{id}/{linkId}',[App\Http\Controllers\AdminController::class,'delete_recipient_link_index'])->name('delete.recipient.link.index');
      Route::post('delete-recipient-link/{id}/{linkId}/post',[App\Http\Controllers\AdminController::class,'delete_recipient_link_post'])->name('delete.recipient.link.post');
    });

    Route::middleware(['permission:Add A Conflict'])->group(function() {
      Route::get('add-conflict', [App\Http\Controllers\AdminController::class,'add_conflict_index'])->name('new.conflict.index');
      Route::post('add-conflict-complete', [App\Http\Controllers\AdminController::class,'add_conflict_post'])->name('new.conflict.post');
    });

    Route::middleware(['permission:Edit A Conflict'])->group(function() {
      Route::get('edit-conflicts', [App\Http\Controllers\AdminController::class,'edit_conflict_list'])->name('edit.conflict.list');
      Route::get('edit-conflicts/{id}', [App\Http\Controllers\AdminController::class,'edit_conflict_index'])->name('edit.conflict.index');
      Route::post('edit-conflicts/{id}/complete', [App\Http\Controllers\AdminController::class,'edit_conflict_post'])->name('edit.conflict.post');
    });

    Route::middleware(['permission:Delete A Conflict'])->group(function() {
      Route::get('delete-conflicts', [App\Http\Controllers\AdminController::class,'edit_conflict_list'])->name('delete.conflict.list');
      Route::get('delete-conflicts/{id}', [App\Http\Controllers\AdminController::class,'delete_conflict_index'])->name('delete.conflict.index');
      Route::post('delete-conflicts/{id}/complete', [App\Http\Controllers\AdminController::class,'delete_conflict_post'])->name('delete.conflict.post');
    });

    Route::middleware(['permission:Assign Roles To Members'])->group(function() {
      // Lists all members IOT select a member and change their roles
      Route::get('assign-roles-list/{search_type?}', [App\Http\Controllers\AdminController::class,'all_members'])->name('admin.roles');
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
      // Event image deletion
      Route::get('edit-event/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_event_index'])->name('image.event.index');
      Route::post('edit-event/{id}/delete-image/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_event_delete'])->name('image.event.delete');
      // Subevent
      Route::get('add-subevent/{event_id}',[App\Http\Controllers\AdminController::class,'add_subevent_index'])->name('subevent.add');
      Route::post('add-subevent/{event_id}/post',[App\Http\Controllers\AdminController::class,'add_subevent_post'])->name('subevent.add.post');
      Route::get('edit-subevent/{event_id}/{id}',[App\Http\Controllers\AdminController::class,'edit_subevent_index'])->name('subevent.edit');
      Route::post('edit-subevent/{event_id}/{id}/post',[App\Http\Controllers\AdminController::class,'edit_subevent_post'])->name('subevent.edit.post');
      Route::get('delete-subevent/{event_id}/{id}',[App\Http\Controllers\AdminController::class,'delete_subevent_index'])->name('subevent.delete');
      Route::post('delete-subevent/{event_id}/{id}/post',[App\Http\Controllers\AdminController::class,'delete_subevent_post'])->name('subevent.delete.post');
      // Subevent image deletion
      Route::get('edit-subevent/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_subevent_index'])->name('image.subevent.index');
      Route::post('edit-subevent/{id}/delete-image/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_subevent_delete'])->name('image.subevent.delete');
    });

    Route::middleware(['permission:Delete An Event'])->group(function() {
      Route::get('delete-event', [App\Http\Controllers\AdminController::class,'all_events'])->name('delete.event.list');
      Route::get('delete-event/{id}',[App\Http\Controllers\AdminController::class,'delete_event_index'])->name('delete.event.index');
      Route::post('delete-event/{id}',[App\Http\Controllers\AdminController::class,'delete_event_post'])->name('delete.event.post');
    });

    Route::middleware(['permission:Add An Item'])->group(function() {
      Route::get('add-item',[App\Http\Controllers\AdminController::class,'add_item_index'])->name('add.item.index');
      Route::post('add-item-complete',[App\Http\Controllers\AdminController::class,'add_item_post'])->name('add.item.post');
    });

    Route::middleware(['permission:Edit An Item'])->group(function() {
      Route::get('edit-item', [App\Http\Controllers\AdminController::class,'all_items'])->name('edit.item.list');
      Route::get('edit-item/{id}',[App\Http\Controllers\AdminController::class,'edit_item_index'])->name('edit.item.index');
      Route::post('edit-item/{id}/complete',[App\Http\Controllers\AdminController::class,'edit_item_post'])->name('edit.item.post');
      Route::get('edit-item/{id}/delete-image/{img_type}/{edit_type}',[App\Http\Controllers\AdminController::class,'image_item_index'])->name('image.item.index');
      Route::post('edit-item/{id}/delete-image/{img_type}/complete',[App\Http\Controllers\AdminController::class,'image_item_delete'])->name('image.item.delete');
    });

    Route::middleware(['permission:Delete An Item'])->group(function() {
      Route::get('delete-item', [App\Http\Controllers\AdminController::class,'all_items'])->name('delete.item.list');
      Route::get('delete-item/{id}',[App\Http\Controllers\AdminController::class,'delete_item_index'])->name('delete.item.index');
      Route::post('delete-item/{id}',[App\Http\Controllers\AdminController::class,'delete_item_post'])->name('delete.item.post');
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

    Route::middleware(['permission:Add A Bulletin'])->group(function() {
      Route::get('add-bulletin',[App\Http\Controllers\AdminController::class,'add_bulletin_index'])->name('add.bulletin.index');
      Route::post('add-bulletin-complete',[App\Http\Controllers\AdminController::class,'add_bulletin_post'])->name('add.bulletin.post');
    });

    Route::middleware(['permission:Edit A Bulletin'])->group(function() {
      // See a list of bulletins for editin
      Route::get('edit-bulletin-list', [App\Http\Controllers\AdminController::class,'all_bulletins'])->name('edit.bulletin.list');
      // Prepare to edit a single bulletin's info
      Route::get('edit-bulletin/{id}',[App\Http\Controllers\AdminController::class,'edit_bulletin_index'])->name('edit.bulletin.index');
      // Edit a single bulletin's info
      Route::post('edit-bulletin/{id}/post',[App\Http\Controllers\AdminController::class,'edit_bulletin_post'])->name('edit.bulletin.post');
    });

    Route::middleware(['permission:Delete A Bulletin'])->group(function() {
      // See a list of bulletins for editin
      Route::get('delete-bulletin-list', [App\Http\Controllers\AdminController::class,'all_bulletins'])->name('delete.bulletin.list');
      // Prepare to delete a single bulletin
      Route::get('delete-bulletin/{id}',[App\Http\Controllers\AdminController::class,'delete_bulletin_index'])->name('delete.bulletin.index');
      // Delete a single bulletin
      Route::post('delete-bulletin-complete/{id}',[App\Http\Controllers\AdminController::class,'delete_bulletin_post'])->name('delete.bulletin.post');
    });
  });
});

Route::get('no-page-found',[App\Http\Controllers\WelcomeController::class,'error'])->name('error');

Route::fallback(function () {
  $init_url = $_SERVER['REQUEST_URI'];
  $new_url = 'https://classic.bobcat.ws'.$init_url;

  $header_array = explode(" ",get_headers($new_url)[0]);
  $has_path = true;
  for ($i = 0; count($header_array) > $i; $i++) {
    if ($header_array[$i] == "404") {
      $has_path = false;
    };
  };
  if ($has_path == true) {
    return redirect($new_url);
  } else {
    return redirect()->route('error');
  };
});
