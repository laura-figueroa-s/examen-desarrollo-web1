<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
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
        $cliente = Cliente::create([
            'rut_empresa' => $_request->rut_empresa,
            'rubro' => $_request->rubro,
            'razon_social' => $_request->razon_social,
            'telefono' => $_request->telefono,
            'direccion' => $_request->direccion,
            'nombre_persona_contacto' => $_request->nombre_persona_contacto,
            'email_persona_contacto' => $_request->email_persona_contacto,
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
        $datos = Cliente::all();
    }

    public function getAllClients()
    {
        $clientes = Cliente::all();
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
        $cliente = Cliente::find($_request->id);
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

        $cliente = Cliente::find($_request->id);
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
        $cliente = Cliente::find($_request->id);
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
