<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

// Rota para listar os usuários que temos cadastrados.
Route::get('/users', [UserController::class, 'index']);

// Rota para listar apenas UM usuário
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Rota para listar os endereços que temos cadastrados.
Route::get('/addresses', [AddressController::class, 'index']);

// Rota para listar apenas UM endereço
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

