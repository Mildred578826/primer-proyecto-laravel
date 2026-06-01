<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'formulario']);
Route::post('/procesar', [UsuarioController::class, 'procesar']);

