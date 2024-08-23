<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});


Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/Registeration', [AuthController::class, 'Registeration'])->name('Registeration');
