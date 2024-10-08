<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

//Login
Route::get('/user/login', [UserController::class, 'formularioLogin'])->name('usuario.login');
Route::post('/user/login', [UserController::class, 'login'])->name('usuario.validar');

Route::post('/logout', [UserController::class, 'logout'])->name('usuario.logout');

//Registration
Route::get('/users/register', [UserController::class, 'formularioNuevo'])->name('usuario.registrar');
Route::post('/users/register', [UserController::class, 'registrar'])->name('usuario.registrar');

//General dashboard
Route::get('/backoffice', function () {
    $user = Auth::user();
    if ($user == NULL) {
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
    }

    return view('backoffice.dashboard', [
        'user' => $user,
        'totalUsuarios' => User::count(),
        'totalClientes' => Cliente::count(),
        'totalProductos' => Producto::count(),
    ]);
})->name('backoffice.dashboard');

    //Clientes
Route::get('/backoffice/clientes', function(){
    $user = Auth::user();
    if ($user == NULL) {
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
    }

    return view('backoffice.administrador.cliente', [
        'user' => $user,
        'clientes' => Cliente::all(),
    ]);
})->name('backoffice.clientes');
Route::get('/backoffice/clientes/get/{_id}', [ClienteController::class, 'getClient']);
Route::post('/backoffice/cliente/new', [ClienteController::class, 'register'])->name('cliente.register');
Route::put('/backoffice/clientes/update/{_id}', [ClienteController::class, 'updateClient'])->name('cliente.update');
Route::delete('/backoffice/clientes/delete/{_id}', [ClienteController::class, 'deleteClient'])->name('cliente.delete');

    //Productos
Route::get('/backoffice/productos', function(){
    $user = Auth::user();
    if ($user == NULL) {
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
    }

    return view('backoffice.administrador.producto', [
        'user' => $user,
        'productos' => Producto::all(),
    ]);
})->name('backoffice.productos');
Route::get('/backoffice/productos/get/{_id}', [ProductoController::class, 'getProduct']);
Route::post('/backoffice/producto/new',[ProductoController::class, 'register'])->name('producto.register');
Route::put('/backoffice/productos/update/{_id}', [ProductoController::class, 'updateProduct'])->name('producto.update');
Route::delete('/backoffice/productos/delete/{_id}', [ProductoController::class, 'deleteProduct'])->name('producto.delete');

    //Usuarios
    Route::get('/backoffice/usuarios', function(){
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        
        $searchId = request('search_id');
        $usuarios = User::when($searchId, function ($query) use ($searchId) {
            return $query->where('id', $searchId);
        })->get();
        
        return view('backoffice.administrador.usuario', [
            'user' => $user,
            'usuarios' => $usuarios,
        ]);
    })->name('backoffice.usuarios');
Route::get('/backoffice/usuarios/get/{_id}', [UserController::class, 'getUser']);
Route::put('/backoffice/usuarios/update/{_id}', [UserController::class, 'updateUser'])->name('usuario.update');
Route::delete('/backoffice/usuarios/delete/{_id}', [UserController::class, 'deleteUser'])->name('usuario.delete');
