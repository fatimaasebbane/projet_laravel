<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\blog_detailController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\chefControler;
use App\Http\Controllers\clientAbout;
use App\Http\Controllers\clientBlog;
use App\Http\Controllers\clientComment;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\ClientGaleryController;
use App\Http\Controllers\clientIndex;
use App\Http\Controllers\clientMenu;
use App\Http\Controllers\clientProfile;
use App\Http\Controllers\clientReservation;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\ContactConroller;
use App\Http\Controllers\galeryConroller;
use App\Http\Controllers\pannierController;
use App\Http\Controllers\RepasConroller;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/clientBlog/search', [App\Http\Controllers\clientBlog::class, 'search'])->name('search');
Route::get('/blog_detailController/store', [App\Http\Controllers\blog_detailController::class, 'store'])->name('createComment');
Route::get('/clientReservation/store', [App\Http\Controllers\clientReservation::class, 'store'])->name('createReservation');
Route::get('/clientIndex/store', [App\Http\Controllers\clientIndex::class, 'store'])->name('createreservation');
Route::get('/clientContact/store', [App\Http\Controllers\ClientContactController::class, 'store'])->name('createContact');
Route::get('/user/reservations/{id}', [App\Http\Controllers\UserController::class, 'reservations'])->name('reservations');
Route::get('/user/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/user/contacts/{id}', [App\Http\Controllers\UserController::class, 'contacts'])->name('contacts');
Route::get('/pannier/add/{id}', [App\Http\Controllers\pannierController::class, 'add'])->name('add_pannier');
Route::resource('pannier', pannierController::class);

Route::resource('repas',RepasConroller::class);
Route::resource('contact', ContactConroller::class);
Route::resource('photos',galeryConroller::class);
Route::resource('chef',chefControler::class);
Route::resource('reservation',reservationController::class);
Route::resource('admin',AdminController::class);
Route::resource('user',UserController::class);
Route::resource('blog',blogController::class);
Route::resource('category',categoryController::class);
Route::resource('comment',commentController::class);
Route::resource('clientContact',ClientContactController::class);
Route::resource('clientIndex',clientIndex::class)->middleware('auth');
Route::resource('clientReservation',clientReservation::class);
Route::resource('clientAbout',clientAbout::class);
Route::resource('clientMenu',clientMenu::class);
Route::resource('clientGalery',ClientGaleryController::class);
Route::resource('clientBlog',clientBlog::class);
Route::resource('clientBlog_detail',blog_detailController::class);
Route::resource('clientprofile',clientProfile::class);
Route::resource('clientComment',clientComment::class);
Route::resource('cart',cartController::class);
Route::resource('commande',commandeController::class);





Route::get('/', function () {
    return view ('auth.login');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

