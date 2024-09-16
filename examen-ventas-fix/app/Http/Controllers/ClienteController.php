<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{

    public function getById($_id)
    { //Validar sesión activa
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        } //Si no hay ID en el parámetro, me trae todos los clientes
        if ($_id === null) {
            $datos = User::all();
            $datos->each(function ($item) {
                if ($item->imagen) {
                    $item->imagen = base64_encode($item->imagen);
                }
            });
        } else {
            $datos = User::findOrFail($_id);
            if ($datos->imagen) {
                $datos->imagen = base64_encode($datos->imagen);
            }
        }
        return response()->json([
            'data' => $datos
        ]);
    }

    public function delete($_id)
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        $registro = Cliente::findOrFail($_id);
    }

    public function create(Request $_request)
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        // Validar la solicitud. USO DE UNIQUE: unique:tabla,campo
        $_request->validate([
            'usuario_nombre' => 'required|string',
            'usuario_rut' => 'required|string|unique:users,email',
            'usuario_email' => 'required|string',
            'usuario_password' => 'required|string',
        ], $this->mensajes);

        $datos = $_request->only('usuario_nombre', 'usuario_rut', 'usuario_email', 'usuario_password', 'usuario_rePassword');

        if ($datos['usuario_password'] != $datos['usuario_rePassword']) {
            return back()->withErrors(['message' => 'Las contraseñas ingresadas no son iguales.']);
        }
    }

    public function update(Request $_request, $_id)
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }

        $_request->validate([
            'usuario_nombre' => 'required|string',
            'usuario_rut' => 'required|string',
            'usuario_password' => 'required|string',
            'usuario_imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'usuario_email' => 'required',
        ], $this->mensajes);

        //busca el proyecto
        $registro = User::findOrFail($_id);

        $datos = $_request->only('_token', 'usuario_nombre', 'usuario_email', 'usuario_password', 'usuario_rePassword', 'usuario_imagen', 'usuario_rut');

        $cambios = 0;

        // solo si es distinto actualiza
        if ($registro->nombre != $datos['usuario_nombre']) {
            $registro->nombre = $datos['usuario_nombre'];
            $cambios++;
        }
        if ($registro->email != $datos['usuario_email']) {
            $registro->email = $datos['usuario_email'];
            $cambios++;
        }
        if ($datos['usuario_password'] != '') {
            if ($datos['usuario_password'] != $datos['usuario_rePassword']) {
                return back()->withErrors(['message' => 'Las contraseñas ingresadas no son iguales.']);
            } else {
                $registro->password = $datos['usuario_password'];
                $cambios++;
            }
        }
        if ($registro->rol_id != $datos['usuario_rut_id']) {
            $registro->rol_id = $datos['usuario_rut_id'];
            $cambios++;
        }

        try {
            if ($registro->imagen != $datos['usuario_imagen']) {
                // Manejar la carga de la imagen
                $image = $_request->file('usuario_imagen');
                $imageData = file_get_contents($image);
                $registro->imagen = $imageData;
                $cambios += 1;
            }
        } catch (\Throwable $th) {
        }

        if ($cambios > 0) {
            try {
                $registro->save();
                return redirect()->route('usuarios.index')->with('success', "[id: $registro->id] [Usuario: $registro->nombre] actualizado con éxito.");
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error al actualizar el proyecto: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', "[id: $registro->id] [Usuario: $registro->nombre] no se realizaron cambios.");
        }
    }
}
