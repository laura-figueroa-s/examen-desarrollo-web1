<?php

use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/user/login', [UserController::class, 'formularioLogin'])->name('usuario.login');
Route::post('/user/login', [UserController::class, 'login'])->name('usuario.validar');

Route::get('/users/register', [UserController::class, 'formularioNuevo'])->name('usuario.registrar');
Route::post('/users/register', [UserController::class, 'registrar'])->name('usuario.registrar');

Route::get('/backoffice', function () {
    /* $user = Auth::user();
    if ($user == NULL) {
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
    } */

    return view('backoffice.dashboard', [
        'users' => User::all(),
        'clientes' => Cliente::all(),
        'productos' => Producto::all(),
    ]);
})->name('backoffice.dashboard');

Route::get('/backoffice.producto', function(){
    return view('backoffice.administrador.producto', [
        'productos' => Producto::all(),
    ]);
})->name('backoffice.administrador.producto');