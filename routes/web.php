<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FerramentaManutencaoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('quartos', QuartoController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('servicos', ServicoController::class);
    Route::resource('ferramentas-manutencao', FerramentaManutencaoController::class);
    Route::resource('clientes', ClienteController::class);
});

require __DIR__.'/auth.php';
