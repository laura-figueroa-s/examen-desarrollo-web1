@extends('backoffice.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard | Productos')

@section('css')
@endsection

@section('content')
    
@endsection

@section('scripts')
<script>
    // Inicializa el arreglo que contendrá los proyectos
    const listaProductos = [];

    @foreach ($productos as $producto)
        listaProductos.push({
            id: '{{ $producto->id }}',
            nombre: '{{ $producto->nombre }}',
            descripcion_corta: '{{ $producto->descripcion_corta }}'
            stock_actual: '{{ $producto->stock_actual }}'
            precio_venta: '{{ $producto->precio_venta }}'
        });
    @endforeach
</script>
@endsection