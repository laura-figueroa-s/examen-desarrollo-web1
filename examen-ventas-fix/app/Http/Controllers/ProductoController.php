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
    // Validate the request
    $_request->validate([
        'nombre' => 'required|string|max:255',
        'imagen_producto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'sku' => 'required|string|max:50',
        'descripcion_corta' => 'required|string|max:500',
        'descripcion_larga' => 'required|string|max:1000',
        'precio_neto' => 'required|numeric|min:0|max:99999999.99',
        'precio_venta' => 'required|numeric|min:0|max:99999999.99',
        'stock_actual' => 'required|integer|min:0|max:9999',
        'stock_minimo' => 'required|integer|min:0|max:9999',
        'stock_bajo' => 'required|integer|min:0|max:9999',
        'stock_alto' => 'required|integer|min:0|max:9999',
    ]);

    // Handle the image upload
    if ($_request->hasFile('imagen_producto')) {
        $imageName = time().'.'.$_request->imagen_producto->extension();
        $_request->imagen_producto->move(public_path('images'), $imageName);
        $imagePath = 'images/'.$imageName;
    }

    // Create the product
    $producto = Producto::create([
        'nombre' => $_request->nombre,
        'imagen_producto' => $imagePath ?? null,
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

    // Check if product is saved successfully
    if ($producto) {
        return response()->json([
            'message' => 'Product created successfully',
            'producto' => $producto,
        ], 201);
    } else {
        return response()->json([
            'message' => 'Failed to create product',
        ], 500);
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
