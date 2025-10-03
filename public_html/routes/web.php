<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/profile.html',[HomeController::class, 'about'])->name('about');
Route::get('/contact.html',[HomeController::class, 'contact'])->name('contact');
Route::post('/contact-post',[HomeController::class, 'contactPost'])->name('contact-post');
Route::get('/gallery',[HomeController::class, 'gallery'])->name('gallery');
Route::get('portrait-makeup-artist.html',[HomeController::class, 'faceMakeup'])->name('face-makeup');
Route::get('wedding-makeup-artist.html',[HomeController::class, 'bridalMakeup'])->name('bridal-makeup');
Route::get('fashion-makeup.html',[HomeController::class, 'fashionMakeup'])->name('fashion-makeup');
Route::get('film-makeup.html',[HomeController::class, 'filmMakeup'])->name('film-makeup');



Route::get('login',[LoginController::class, 'login'])->name('admin.login');
Route::get('logout',[LoginController::class, 'logout'])->name('admin.logout');
Route::post('login-post',[LoginController::class, 'loginPost'])->name('admin.login-post');

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard',[AdminController::class, 'index'])->name('index');
    Route::any('/save-tinymce-image', [AdminController::class, 'saveTinymceImage'])->name('save_tinymce_image');

    //gallery
    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function()
    {
        Route::get('index', [GalleryController::class, 'index'])->name('index');
        Route::get('listing', [GalleryController::class, 'listing'])->name('listing');
        Route::get('create', [GalleryController::class, 'create'])->name('create');
        Route::post('store', [GalleryController::class, 'store'])->name('store');
        Route::get('edit/{id}', [GalleryController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::get('delete/{id}', [GalleryController::class, 'delete'])->name('delete');
    });

     Route::post('/gallery/imagestore', [GalleryController::class, 'imagestore'])->name('admin.gallery.imagestore');
     Route::get('/gallery/{id}/images', [GalleryController::class, 'images'])->name('admin.gallery.images');
     Route::post('/gallery/sliderrmv', [GalleryController::class, 'sliderrmv'])->name('admin.gallery.sliderrmv');



    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function()
    {
        Route::get('list', [ContactController::class, 'index'])->name('index');
        Route::get('delete/{id}', [ContactController::class, 'delete'])->name('delete');

    });



});

    Route::get('/{slug}', [GalleryController::class, 'show'])->name('portfolio.show');




