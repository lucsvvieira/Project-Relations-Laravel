<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

// Rota para listar os usuários que temos cadastrados.
Route::get('/users', [UserController::class, 'index']);

// Rota para listar apenas UM usuário
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Incluir um novo usuário
Route::post('/users', [UserController::class, 'create']);

// Rota para listar os endereços que temos cadastrados.
Route::get('/addresses', [AddressController::class, 'index']);

// Rota para listar apenas UM endereço
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Incluir um novo endereço
Route::post('/addresses', [AddressController::class, 'create']);

// Invoices

Route::get('/invoices', [InvoiceController::class, 'index']);
// Incluir uma nova invoice
Route::post('/invoices', [InvoiceController::class, 'createInvoice']);
// Listar uma invoice específica
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);




