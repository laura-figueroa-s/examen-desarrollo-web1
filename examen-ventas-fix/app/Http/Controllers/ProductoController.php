<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProductoController extends Controller
{
    public function register(Request $_request)
    {
        // Validate the request
        $_request->validate([
            'nombre' => 'required|string',
            'imagen_producto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sku' => 'required|string|max:50',
            'descripcion_corta' => 'required|string|max:500',
            'descripcion_larga' => 'required|string|max:1000',
            'precio_neto' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'stock_actual' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'stock_bajo' => 'required|integer',
            'stock_alto' => 'required|integer',
        ]);

        // Handle the image upload
        if ($_request->hasFile('imagen_producto')) {
            $imageName = time() . '.' . $_request->imagen_producto->extension();
            $_request->imagen_producto->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
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
            return redirect()->route('backoffice.productos')->with('success', 'Producto creado con éxito.');
        } else {
            return redirect()->back()->withErrors(['message' => 'No se pudo crear el producto.']);
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

    public function getAllProducts()
    {
        $productos = Producto::all();
        if ($productos) {
            return response([
                'message' => 'success',
                'products' => $productos
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'No existen productos en la base de datos'
            ]);
        }
    }

    public function getProduct(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $producto = Producto::find($_request->id);
        if ($producto) {
            return redirect()->route('backoffice.productos')->with('success', 'Productos obtenidos con éxito.');
        } else {
            return redirect()->back()->withErrors(['message' => 'No se consiguió el producto.']);
        }
    }

    public function updateProduct(Request $_request)
    {
        $_request->validate([
            'nombre' => 'required',
            'sku' => 'required',
            'descripcion_corta' => 'required',
            'descripcion_larga' => 'required',
            'precio_neto' => 'required',
            'precio_venta' => 'required',
            'stock_actual' => 'required',
            'stock_minimo' => 'required',
            'stock_bajo' => 'required',
            'stock_alto' => 'required',
        ]);

        $producto = Producto::find($_request->id);
        if ($producto) {
            $producto->nombre = $_request->nombre;
            $producto->sku = $_request->sku;
            $producto->descripcion_corta = $_request->descripcion_corta;
            $producto->descripcion_larga = $_request->descripcion_larga;
            $producto->precio_neto = $_request->precio_neto;
            $producto->precio_venta = $_request->precio_venta;
            $producto->stock_actual = $_request->stock_actual;
            $producto->stock_minimo = $_request->stock_minimo;
            $producto->stock_bajo = $_request->stock_bajo;
            $producto->stock_alto = $_request->stock_alto;
            $producto->save();
            return redirect()->route('backoffice.productos')->with('success', 'Producto actualizado con éxito.');
        } else {
            return redirect()->back()->withErrors(['message' => 'No se consiguió el producto.']);
        }
    }

    function deleteProduct(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $producto = Producto::find($_request->id);
        if ($producto) {
            $producto->delete();
            return redirect()->route('backoffice.productos')->with('success', 'Producto eliminado con éxito.');
        } else {
            return redirect()->back()->withErrors(['message' => 'No se consiguió el producto.']);
        }
    }

    //Api methods
    public function create(Request $_request)
    {
        if ($this->getHeader() == NULL) {
            return response()->json(['message' => 'Sin Autorización'], 401);
        }

        if (!$this->getAuthBearer('POST')) {
            return response()->json(['message' => 'Sin Autorización, incorrecta'], 401);
        }
        // Validate the request
        $_request->validate([
            'nombre' => 'required|string',
            'imagen_producto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sku' => 'required|string|max:50',
            'descripcion_corta' => 'required|string|max:500',
            'descripcion_larga' => 'required|string|max:1000',
            'precio_neto' => 'required|numeric',
            /* 'precio_venta' => 'required|numeric', */
            'stock_actual' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'stock_bajo' => 'required|integer',
            'stock_alto' => 'required|integer'
        ]);

        // Handle the image upload
        if ($_request->hasFile('imagen_producto')) {
            $imageName = time() . '.' . $_request->imagen_producto->extension();
            $_request->imagen_producto->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $precio_venta = $_request->precio_neto * 1.19;

        // Create the product
        $producto = Producto::create([
            'nombre' => $_request->nombre,
            'imagen_producto' => $imagePath ?? null,
            'sku' => $_request->sku,
            'descripcion_corta' => $_request->descripcion_corta,
            'descripcion_larga' => $_request->descripcion_larga,
            'precio_neto' => $_request->precio_neto,
            'precio_venta' => $precio_venta,
            'stock_actual' => $_request->stock_actual,
            'stock_minimo' => $_request->stock_minimo,
            'stock_bajo' => $_request->stock_bajo,
            'stock_alto' => $_request->stock_alto,
        ]);

        // Check if product is saved successfully
        if ($producto) {
            return response()->json([
                'message' => 'Producto creado con éxito',
                'producto' => $producto,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Ha ocurrido un error al intentar crear un producto',
            ], 500);
        }
    }

    public function getProductApi(Request $_request)
    {
        $_request->validate(['id' => 'required']);
        $producto = Producto::find($_request->id);
        if ($producto) {
            return response([
                'message' => 'success',
                'product' => $producto,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'product' => 'El producto no existe',
                'status' => 404
            ]);
        }
    }

    public function getAllProductsApi()
    {
        $productos = Producto::all();
        if ($productos) {
            return response([
                'message' => 'success',
                'products' => $productos
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'No existen productos en la base de datos'
            ]);
        }
    }

    public function updateProductApi(Request $_request)
    {
        if ($this->getHeader() == NULL) {
            return response()->json(['message' => 'Sin Autorización'], 401);
        }

        if (!$this->getAuthBearer('PUT')) {
            return response()->json(['message' => 'Sin Autorización, incorrecta'], 401);
        }

        $_request->validate([
            'nombre' => 'required',
            'sku' => 'required',
            'descripcion_corta' => 'required',
            'descripcion_larga' => 'required',
            'precio_neto' => 'required',
            /* 'precio_venta' => 'required', */
            'stock_actual' => 'required',
            'stock_minimo' => 'required',
            'stock_bajo' => 'required',
            'stock_alto' => 'required',
        ]);

        $precio_venta = $_request->precio_neto * 1.19;

        $producto = Producto::find($_request->id);
        if ($producto) {
            $producto->nombre = $_request->nombre;
            $producto->sku = $_request->sku;
            $producto->descripcion_corta = $_request->descripcion_corta;
            $producto->descripcion_larga = $_request->descripcion_larga;
            $producto->precio_neto = $_request->precio_neto;
            $producto->precio_venta = $precio_venta;
            $producto->stock_actual = $_request->stock_actual;
            $producto->stock_minimo = $_request->stock_minimo;
            $producto->stock_bajo = $_request->stock_bajo;
            $producto->stock_alto = $_request->stock_alto;
            $producto->save();
            return response([
                'message' => 'success',
                'product' => $producto,
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'product' => 'El producto no existe',
                'status' => 404
            ]);
        }
    }

    function deleteProductApi(Request $_request)
    {

        if ($this->getHeader() == NULL) {
            return response()->json(['message' => 'Sin Autorización'], 401);
        }

        if (!$this->getAuthBearer('DELETE')) {
            return response()->json(['message' => 'Sin Autorización, incorrecta'], 401);
        }
        
        $_request->validate(['id' => 'required']);
        $producto = Producto::find($_request->id);
        if ($producto) {
            $producto->delete();
            return response([
                'message' => 'success',
                'products' => 'El producto ha sido eliminado exitosamente',
                'status' => 200
            ]);
        } else {
            return response([
                'message' => 'error',
                'products' => 'El producto que deseas eliminar no existe',
                'status' => 404
            ]);
        }
    }
    
}
