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

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/userManagement', [DashboardController::class,'indexUserManagement'])->name('userManagement');
Route::get('/logout', function () {Auth::logout();return redirect('/');})->name('logout');
Route::post('/avatar/update', [DashboardController::class, 'updateAvatar'])->name('avatar.update');
Route::post('/profile/update', [DashboardController::class, 'updateProfile'])->name('profile.update');
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

// routes/web.php
Route::post('/favorites', [FavoritesController::class, 'store'])->name('favorites.store');
// Route to display the user's favorites page
Route::get('/favorites', [FavoritesController::class, 'index'])->name('favorites.index');

// Route::delete('/favorites/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');
// routes/web.php or routes/api.php
Route::delete('/favorites/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('/contacts/create', [ContactsController::class, 'store'])->name('contacts.store');


// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'index'])->name('categories');
Route::get('/services', [CategoryController::class, 'indexServices'])->name('services');

// Route::get('/categories', CategoryController::class,'index')->name('categories');

Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');


