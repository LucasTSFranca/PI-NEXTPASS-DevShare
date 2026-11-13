<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublishController;


// Rotas para usuários não autenticados
Route::middleware('guest')->group(function () {

    Route::get('/', [InitController::class, 'index'])->name('index');

    Route::get('/login', [InitController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [InitController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

// Rotas para usuários autenticados
Route::middleware('auth')->group(function () {

    Route::get('/home', [InitController::class, 'home'])->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [InitController::class, 'profile'])->name('profile');

    Route::get('publish',[InitController::class, 'publish'])->name('publish');

    Route::post('publish',[PublishController::class,'publish'])->name('publish.post');

});