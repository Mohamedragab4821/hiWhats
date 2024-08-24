<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ContactsController;



Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');

Route::get('/profileSetting', [AuthController::class, 'indexProfileSetting'])->name('profileSetting');
Route::get('/profileSetting/productMangement', [ProductController::class, 'indexproductMangement'])->name('productMangement');
Route::get('/profileSetting/categoryMangement', [ProductController::class, 'indexcategoryMangement'])->name('categoryMangement');
Route::post('/profileSetting/productMangement/store', [ProductController::class, 'storeProduct'])->name('storeProduct');
Route::delete('/profileSetting/productMangement/delete/{product_id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('/contacts/create', [ContactsController::class, 'store'])->name('contacts.store');

