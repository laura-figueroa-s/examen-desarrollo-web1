<?php

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

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