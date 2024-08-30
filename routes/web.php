<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasswordController;

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/userManagement', [DashboardController::class,'indexUserManagement'])->name('userManagement');
Route::get('/logout', function () {Auth::logout();return redirect('/');})->name('logout');
Route::post('/avatar/update', [DashboardController::class, 'updateAvatar'])->name('avatar.update');
Route::post('/profile/update', [DashboardController::class, 'updateProfile'])->name('profile.update');
Route::put('/profile/updateUser/{id}', [DashboardController::class, 'updateUser'])->name('updateUser');
Route::delete('/avatar/delete', [DashboardController::class, 'deleteAvatar'])->name('deleteAvatar');
Route::delete('/users/{user}', [DashboardController::class, 'destroy'])->name('users.destroy');

Route::get('/editUser/{id}', [DashboardController::class,'indexEditUser'])->name('editUser');


Route::get('/profileSetting', [AuthController::class, 'indexProfileSetting'])->name('profileSetting');
Route::get('/profileSetting/productMangement', [ProductController::class, 'indexproductMangement'])->name('productMangement');
Route::get('/profileSetting/categoryMangement', [ProductController::class, 'indexcategoryMangement'])->name('categoryMangement');
Route::post('/profileSetting/productMangement/store', [ProductController::class, 'storeProduct'])->name('storeProduct');
Route::delete('/profileSetting/productMangement/delete/{product_id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::post('/profileSetting/productMangement/edit-product/{product_id}', [ProductController::class, 'updateProduct'])->name('editProduct');
Route::post('/profileSetting/categoryMangement', [ProductController::class, 'storeCategory'])->name('storeCategory');
Route::delete('/profileSetting/categoryMangement/delete/{id}', [ProductController::class, 'destroyCategory'])->name('destroyCategory');
Route::post('/profileSetting/categoryMangement/update/{id}', [ProductController::class, 'updateCategory'])->name('updateCategory');
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/home_ads', [AdsController::class, 'index'])->name('ads.index');

Route::post('/home_ads/store', [AdsController::class, 'store'])->name('ads.store');
Route::delete('/home_ads/delete/{id}', [AdsController::class, 'destroy'])->name('ads.destroy');


// routes/web.php
Route::post('/favorites', [FavoritesController::class, 'store'])->name('favorites.store');
// Route to display the user's favorites page
Route::get('/favorites', [FavoritesController::class, 'index'])->name('favorites.index');

// Route::delete('/favorites/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');
// routes/web.php or routes/api.php
Route::delete('/favorites/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('/contacts/create', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/displayProduct/{product_id}', [ProductController::class, 'displayProduct'])->name('displayProduct');


// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'index'])->name('categories');
Route::get('/services', [CategoryController::class, 'indexServices'])->name('services');

// Route::get('/categories', CategoryController::class,'index')->name('categories');

Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');
Route::get('/services/search', [CategoryController::class, 'servicesSearch'])->name('services.search');
Route::get('/productMangement/search', [ProductController::class, 'ProductSearch'])->name('Product.search');
Route::get('/categoryMangement/search', [ProductController::class, 'CategorySearch'])->name('Category.search');
Route::get('/Who_Are_We', [ContactsController::class, 'indexWhoAreWe'])->name('whoAreWe');
Route::get('/ourVision', [ContactsController::class, 'indexourVision'])->name('ourVision');
Route::get('/addPage', [PagesController::class, 'index'])->name('page.index');


//forget password

// Password Reset Routes
Route::get('password/reset', [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordController::class, 'reset'])->name('password.update');


