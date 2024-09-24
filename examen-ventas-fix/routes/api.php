<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', [ProductoController::class, 'getAllProducts']);
Route::get('/producto', [ProductoController::class, 'getProduct']);
Route::post('/producto', [ProductoController::class, 'create']);
Route::put('/producto', [ProductoController::class, 'updateProduct']);
Route::delete('/producto', [ProductoController::class, 'deleteProduct']);

Route::get('/clientes', [ClienteController::class, 'getAllClients']);
Route::get('/cliente', [ClienteController::class, 'getClient']);
Route::post('/cliente', [ClienteController::class, 'create']);
Route::put('/cliente', [ClienteController::class, 'updateClient']);
Route::delete('/cliente', [ClienteController::class, 'deleteClient']);

Route::get('/usuarios', [UserController::class, 'getAllUsers']);
Route::get('/usuario', [UserController::class, 'getUser']);
Route::post('/usuario', [UserController::class, 'create']);
Route::put('/usuario', [UserController::class, 'updateUser']);
Route::delete('/usuario', [UserController::class, 'deleteUser']);
