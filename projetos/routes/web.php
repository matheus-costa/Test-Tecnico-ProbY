<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/projetos', [ProjetosController::class, 'index']);
Route::get('/projetos/{id}', [ProjetosController::class, 'show'])->name('projetos.show');
Route::get('/projetos/create', [ProjetosController::class, 'create'])->name('projetos.create');;
Route::get('/projetos/{id}/edit', [ProjetosController::class, 'edit'])->name('projetos.edit');
Route::delete('/projetos/{id}', [ProjetosController::class, 'destroy'])->name('projetos.destroy');


