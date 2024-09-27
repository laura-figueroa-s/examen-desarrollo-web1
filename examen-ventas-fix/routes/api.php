<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

/* Route::match(['lock'], '/demo/{_id}', [DemoController::class, 'disable']);
Route::match(['unlock'], '/demo/{_id}', [DemoController::class, 'enable']); */

Route::get('/productos', [ProductoController::class, 'getAllProductsApi']);
Route::get('/producto', [ProductoController::class, 'getProductApi']);
Route::post('/producto', [ProductoController::class, 'create']);
Route::put('/producto', [ProductoController::class, 'updateProductApi']);
Route::delete('/producto', [ProductoController::class, 'deleteProductApi']);

Route::get('/clientes', [ClienteController::class, 'getAllClientsApi']);
Route::get('/cliente', [ClienteController::class, 'getClientApi']);
Route::post('/cliente', [ClienteController::class, 'create']);
Route::put('/cliente', [ClienteController::class, 'updateClientApi']);
Route::delete('/cliente', [ClienteController::class, 'deleteClientApi']);

Route::get('/usuarios', [UserController::class, 'getAllUsersApi']);
Route::get('/usuario', [UserController::class, 'getUserApi']);
Route::post('/users/register', [UserController::class, 'create']);
Route::put('/usuario', [UserController::class, 'updateUserApi']);
Route::delete('/usuario', [UserController::class, 'deleteUserApi']);
