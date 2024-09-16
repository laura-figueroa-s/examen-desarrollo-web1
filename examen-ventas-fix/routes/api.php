<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', [ProductoController::class, 'getAllProducts']);
Route::get('/producto', [ProductoController::class, 'getProduct']);
Route::post('/producto', [ProductoController::class, 'create']);