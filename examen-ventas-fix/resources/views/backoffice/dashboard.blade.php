@extends('backoffice.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6">
            <!-- Statistics -->
            <div class="col-lg-12 col-md-12">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Estadísticas</h5>
                        <small class="text-muted">Actualizado hace 1 semana</small>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2"><i
                                            class="ti ti-chart-pie-2 ti-lg"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $totalUsuarios }}</h5>
                                        <small>Usuarios</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-danger me-4 p-2"><i
                                            class="ti ti-shopping-cart ti-lg"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $totalProductos }}</h5>
                                        <small>Productos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $totalClientes }}</h5>
                                        <small>Clientes</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
@endsection
