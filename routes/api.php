<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rota para listar os usuários que temos cadastrados.
Route::get('/users', [UserController::class, 'index']);

// Rota para listar os endereços que temos cadastrados.
Route::get('/addresses', [AddressController::class, 'index']);

