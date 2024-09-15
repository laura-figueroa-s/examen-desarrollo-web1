<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProductoController extends Controller
{

    private const SINGULAR_MIN = 'producto';
    private const SINGULAR_MAY = 'Producto';
    private const PLURAL_MIN = 'productos';
    private const PLURAL_MAY = 'Productos';

    private $properties = [
        'title' => [
            'genero' => 'm',
            'name' =>  self::SINGULAR_MAY,
            'singular' => self::SINGULAR_MAY,
            'plural' => self::PLURAL_MAY,
        ],
        'view' => [
            'index' => 'backoffice.mantenedor.' . self::SINGULAR_MIN
        ],
        'actions' => [
            'new' => '/backoffice/' . self::PLURAL_MIN . '/new',
        ],
        'routes' => [
            'index' => self::PLURAL_MIN . '.index'
        ],
        'fields' => [
            [
                'id' => 1,
                'name' => 'nombre',
                'label' => 'Nombre',
                'control' => 'input',
                'type' => 'text',
                'required' => false,
                'inEditar' => true,
                'inNuevo' => true
            ],
            [
                'id' => 2,
                'name' => 'imagen',
                'label' => 'Imagen',
                'control' => 'input',
                'type' => 'file',
                'required' => false,
                'inNuevo' => true
            ],
            [
                'id' => 3,
                'name' => 'descripcion',
                'label' => 'Descripción',
                'control' => 'textarea',
                'type' => 'textarea',
                'required' => false,
                'inEditar' => true,
                'inNuevo' => true
            ],
        ]
    ];
    public function create(Request $_request)
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        // Validar la solicitud. USO DE UNIQUE: unique:tabla,campo
        $_request->validate([
            'proyecto_nombre' => 'required|string|max:255',
            'proyecto_imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'proyecto_descripcion' => 'required|string|max:1000',
        ], $this->mensajes);

        // Manejar la carga de la imagen
        $image = $_request->file('proyecto_logo');
        $imageData = file_get_contents($image);
        try {
            // Insertar el registro en la base de datos
            Producto::create([
                'nombre' => $_request->proyecto_nombre,
                'descripcion' => $_request->proyecto_descripcion,
                'imagen' => $imageData,
                'user_id_create' => $user->id,
                'user_id_last_update' => $user->id,
            ]);
            return redirect()->back()->with('201', 'Proyecto creado con éxito.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el proyecto: ' . $e->getMessage());
        }
    }

    public function index()
    {
        $user = Auth::user();
        if ($user == NULL) {
            return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesión activa.']);
        }
        $datos = Producto::all();

        //recupera datos del usuario
        foreach ($datos as $registro) {
            $registro->user_id_create_nombre = User::findOrFail($registro->user_id_create)->nombre;
            $registro->user_id_last_update_nombre = User::findOrFail($registro->user_id_last_update)->nombre;
        }

        return view($this->properties['view']['index'], [
            'user' => $user,
            'registros' => $datos,
            'action' => $this->properties['actions'],
            'titulo' => $this->properties['title'],
            'campos' => $this->properties['fields'],
        ]);
    }
}
