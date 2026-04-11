<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas
|--------------------------------------------------------------------------
*/

// Página principal do site
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Rotas de Autenticação
|--------------------------------------------------------------------------
*/

// Mostrar formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Processar login
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Rotas Protegidas (requerem login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard / área privada
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Adiciona aqui outras rotas privadas conforme necessário
    // Route::get('/admin/...', [...]);

});
