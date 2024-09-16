<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProductoController extends Controller
{

    public function create(Request $_request)
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        // Validar la solicitud. USO DE UNIQUE: unique:tabla,campo
        $_request->validate([
            'nombre' => 'required|string|max:255',
            'imagen_producto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sku' => 'required|string|max:50',
            'descripcion_corta' => 'required|string|max:500',
            'descripcion_larga' => 'required|string|max:1000',
            'precio_neto' => 'required|integer|max:12',
            'precio_venta' => 'required|integer|max:12',
            'stock_actual' => 'required|integer|max:20',
            'stock_minimo' => 'required|integer|max:20',
            'stock_bajo' => 'required|integer|max:20',
            'stock_alto' => 'required|integer|max:20',
        ]);

        $producto = Producto::create([
            'nombre' => $_request->nombre,
            'imagen_producto' => $_request->imagen_producto,
            'sku' => $_request->sku,
            'descripcion_corta' => $_request->descripcion_corta,
            'descripcion_larga' => $_request->descripcion_larga,
            'precio_neto' => $_request->precio_neto,
            'precio_venta' => $_request->precio_venta,
            'stock_actual' => $_request->stock_actual,
            'stock_minimo' => $_request->stock_minimo,
            'stock_bajo' => $_request->stock_bajo,
            'stock_alto' => $_request->stock_alto,
        ]);

        $producto = Producto::find($producto->id);
        if ($producto) {
            return response(
                [
                    'message' => 'success',
                    'producto' => $producto,
                    'status' => 200
                ]
            );
        } else {
            return response(
                [
                    'message' => 'error',
                    'producto' => $producto,
                    'status' => 404
                ]
            );
        }
    }

    public function index()
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        $datos = Producto::all();
    }
}
