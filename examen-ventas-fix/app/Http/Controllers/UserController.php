<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
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
            //verifica el usuario activo
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

    public function formularioLogin()
    {
        if (Auth::check()) {
            return redirect()->route('backoffice.dashboard');
        }
        return view('usuario.login');
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
        // Validate the request
        $_request->validate([
            'rut_empresa' => 'required|string|max:10',
            'rubro' => 'required|string',
            'razon_social' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'nombre_persona_contacto' => 'required|string',
            'email_persona_contacto' => 'required|email',
        ]);

        // Create the product
        $cliente = User::create([
            'rut_empresa' => $_request->rut_empresa,
            'rubro' => $_request->rubro,
            'razon_social' => $_request->razon_social,
            'telefono' => $_request->telefono,
        ]);

        // Check if product is saved successfully
        if ($cliente) {
            return response()->json([
                'message' => 'Cliente creado exitosamente',
                'cliente' => $cliente,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Ocurrió un error al intentar crear un cliente',
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

    public function getAllClients()
    {
        $clientes = User::all();
        if ($clientes) {
            return response([
                'message' => 'success',
                'clientes' => $clientes
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'No existen clientes en la base de datos'
            ]);
        }
    }

    public function getClient(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $cliente = User::find($_request->id);
        if ($cliente) {
            return response([
                'message' => 'success',
                'cliente' => $cliente,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'cliente' => 'El cliente no existe',
                'status' => 404
            ]);
        }
    }

    public function updateClient(Request $_request)
    {
        $_request->validate([
            'rut_empresa' => 'required',
            'rubro' => 'required',
            'razon_social' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombre_persona_contacto' => 'required',
            'email_persona_contacto' => 'required',
        ]);

        $cliente = User::find($_request->id);
        if ($cliente) {
            $cliente->rut_empresa = $_request->rut_empresa;
            $cliente->rubro = $_request->rubro;
            $cliente->razon_social = $_request->razon_social;
            $cliente->telefono = $_request->telefono;
            $cliente->direccion = $_request->direccion;
            $cliente->nombre_persona_contacto = $_request->nombre_persona_contacto;
            $cliente->email_persona_contacto = $_request->email_persona_contacto;
            $cliente->save();
            return response([
                'message' => 'success',
                'product' => $cliente,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'product' => 'El cliente no existe',
                'status' => 404
            ]);
        }
    }

    function deleteClient(Request $_request)
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
