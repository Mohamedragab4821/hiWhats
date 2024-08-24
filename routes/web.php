<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MessagesController;



Route::get('/', [AuthController::class, 'home'])->name('home');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/userManagement', [DashboardController::class,'indexUserManagement'])->name('userManagement');
Route::get('/logout', function () {Auth::logout();return redirect('/');})->name('logout');
Route::post('/avatar/update', [DashboardController::class, 'updateAvatar'])->name('avatar.update');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::delete('/avatar/delete', [ProfileController::class, 'deleteAvatar'])->name('deleteAvatar');
Route::delete('/users/{user}', [DashboardController::class, 'destroy'])->name('users.destroy');

Route::get('/editUser/{id}', [DashboardController::class,'indexEditUser'])->name('editUser');


Route::get('/profileSetting', [AuthController::class, 'indexProfileSetting'])->name('profileSetting');
Route::get('/profileSetting/productMangement', [ProductController::class, 'indexproductMangement'])->name('productMangement');
Route::get('/profileSetting/categoryMangement', [ProductController::class, 'indexcategoryMangement'])->name('categoryMangement');
Route::post('/profileSetting/productMangement/store', [ProductController::class, 'storeProduct'])->name('storeProduct');
Route::delete('/profileSetting/productMangement/delete/{product_id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
