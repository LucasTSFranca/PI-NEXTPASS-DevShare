<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// usuario sem lgoar
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/cadastro', [AuthController::class, 'showCadastro'])->name('cadastro');
    Route::post('/cadastro', [AuthController::class, 'cadastro']);

    Route::get('/', [AuthController::class, 'showhome'])->name('home');

});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Exemplo de rota protegida do painel do usuário
    //NAO DA PRA VER A INICIO SE N ESTIVER LOGADO
    //FAZ ESSA TELA DE INICIO AGR E CHAMA ELA POR ESSA ROTA AQUI
    //DPS EU AJUSTO O CONTROLLER DELA
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
});
