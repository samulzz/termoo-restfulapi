<?php

use App\Http\Controllers\TermooController;
use Illuminate\Support\Facades\Route;

Route::post('/jogos', [TermooController::class, 'iniciarJogo']);
