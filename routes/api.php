<?php

use App\Http\Controllers\TermooController;
use Illuminate\Support\Facades\Route;

Route::post('/iniciar-jogo', [TermooController::class, 'iniciarJogo']);
Route::post('/validar-tentativa', [TermooController::class, 'validarTentativa']);
Route::post('/jogos', [TermooController::class, 'iniciarJogo']);
Route::post('/jogos/{idJogo}/tentativas', [TermooController::class, 'validarTentativaPorJogo']);
