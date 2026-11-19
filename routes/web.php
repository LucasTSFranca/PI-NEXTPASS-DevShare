<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishController;


// Rotas para usuários não autenticados
Route::middleware('guest')->group(function () {

    Route::get('/', [ViewController::class, 'index'])->name('index');

    Route::get('/login', [ViewController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [ViewController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

// Rotas para usuários autenticados
Route::middleware('auth')->group(function () {

    Route::get('/home', [ViewController::class, 'home'])->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'profile']) ->name('profile');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');

    Route::get('publish',[ViewController::class, 'publish'])->name('publish');
    Route::post('publish',[PublishController::class,'publish'])->name('publish.post');


});