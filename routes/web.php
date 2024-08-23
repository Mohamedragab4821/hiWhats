<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', [AuthController::class, 'home'])->name('home');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');

Route::get('/profileSetting', [AuthController::class, 'indexProfileSetting'])->name('profileSetting');
