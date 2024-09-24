<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $_request)
    {

        $_request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ], $this->mensajes);

        $credenciales = $_request->only('email', 'password');


        if (Auth::attempt($credenciales)) {
            $user = Auth::user();
            if (!$user->activo) {
                Auth::logout();
                return redirect()->route('usuario.login')->withErrors(['email' => 'El usuario se encuentra desactivado.']);
            }
            //Autenticacion exitosa
            $_request->session()->regenerate();
            return redirect()->route('backoffice.dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'El usuario o contraseña son incorrectos.']);
    }

    public function registrar(Request $_request)
    {
        $_request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'rePassword' => 'required|string',
        ], $this->mensajes);

        $datos = $_request->only('nombre', 'email', 'password', 'rePassword');

        if ($datos['password'] != $datos['rePassword']) {
            return back()->withErrors(['message' => 'Las contraseñas ingresadas no son iguales.']);
        }

        try {
            User::create([
                'nombre' => $datos['nombre'],
                'email' => $datos['email'],
                'password' => Hash::make($datos['password']),
                'activo' => true,
            ]);
            return redirect()->route('usuario.login')->with('success', 'Usuario creado con éxito.');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return back()->withErrors(['message' => 'Error al crear el miembro, el email ya existe.']);
            }
            return back()->withErrors(['message' => 'Error desconocido: ' . $e->getMessage()]);
        }
    }

    public function formularioLogin()
    {
        if (Auth::check()) {
            return redirect()->route('backoffice.dashboard');
        }
        return view('user.login');
    }

    public function formularioNuevo()
    {
        if (Auth::check()) {
            return redirect()->route('backoffice.dashboard');
        }
        return view('user.create');
    }

    public function logout(Request $_request)
    {
        Auth::logout();
        $_request->session()->invalidate();
        $_request->session()->regenerateToken();
        return redirect()->route('usuario.login');
    }

    public function create(Request $_request)
    {
        $_request->validate([
            'nombre' => 'required',
            'rut' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $cliente = User::create([
            'nombre' => $_request->nombre,
            'rut' => $_request->rut,
            'email' => $_request->email,
            'password' => Hash::make($_request->password),
        ]);

        if ($cliente) {
            return response()->json([
                'message' => 'Usuario creado exitosamente',
                'cliente' => $cliente,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Ocurrió un error al intentar crear un usuario',
            ], 500);
        }
    }

    public function index()
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        $datos = User::all();
    }

    public function getAllUsers()
    {
        $usuarios = User::all();
        if ($usuarios) {
            return response([
                'message' => 'success',
                'usuarios' => $usuarios
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'No existen usuarios en la base de datos'
            ]);
        }
    }

    public function getUser(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $usuario = User::find($_request->id);
        if ($usuario) {
            return response([
                'message' => 'success',
                'usuario' => $usuario,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'cliente' => 'El usuario no existe',
                'status' => 404
            ]);
        }
    }

    public function updateUser(Request $_request)
    {
        $_request->validate([
            'nombre' => 'required',
            'rut' => 'required',
            'email' => 'required',
        ]);

        $usuario = User::find($_request->id);
        if ($usuario) {
            $usuario->nombre = $_request->nombre;
            $usuario->rut = $_request->rut;
            $usuario->email = $_request->email;
            $usuario->password = Hash::make($_request->password);
            $usuario->save();
            return response([
                'message' => 'success',
                'usuario' => $usuario,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'usuario' => 'El cliente no existe',
                'status' => 404
            ]);
        }
    }

    function deleteUser(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $cliente = User::find($_request->id);
        if ($cliente) {
            $cliente->delete();
            return response([
                'message' => 'success',
                'products' => 'El cliente ha sido eliminado exitosamente',
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'El cliente que deseas eliminar no existe',
                'status' => 404
            ]);
        }
    }
}
