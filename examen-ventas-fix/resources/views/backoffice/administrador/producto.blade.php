@extends('backoffice.layouts.app')

@section('title', 'Dashboard | Productos')

@section('page-title', 'Dashboard de productos de VentasFix')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6 mb-6">
            <div class="card">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="ms-n2">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>
                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="d-flex align-items-center justify-content-end mt-6">
                                    <button class="btn btn-secondary add-new btn-primary waves-effect waves-light me-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddProduct">
                                        <span>
                                            <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                            <span class="d-none d-sm-inline-block">Registrar un nuevo
                                                producto</span>
                                        </span>
                                    </button>
                                    <input type="text" id="search" placeholder="Buscar por ID" oninput="filterProducts()" class="form-control" style="width: 250px;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                        <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
                            aria-describedby="DataTables_Table_0_info" style="width: 1231px;">
                            <thead class="border-top">
                                <tr>
                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                        colspan="1" style="width: 18px;" data-col="1" aria-label=""><input
                                            type="checkbox" class="form-check-input"></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 287px;" aria-sort="descending">SKU
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 128px;">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 89px;">Descripción corta</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Descripción larga</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Precio neto</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Precio de venta</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Stock actual</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Stock mínimo</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Stock bajo</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Stock alto</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="productTableBody">
                                @foreach ($productos as $producto)
                                    <tr data-id="{{ $producto->id }}">
                                        <td class="control dtr-hidden" style="display: none;" tabindex="0"></td>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>{{ $producto->sku }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->descripcion_corta }}</td>
                                        <td>{{ $producto->descripcion_larga }}</td>
                                        <td>{{ $producto->precio_neto }}</td>
                                        <td>{{ $producto->precio_venta }}</td>
                                        <td>{{ $producto->stock_actual }}</td>
                                        <td>{{ $producto->stock_minimo }}</td>
                                        <td>{{ $producto->stock_bajo }}</td>
                                        <td>{{ $producto->stock_alto }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-icon btn-text-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#editProduct">
                                                    <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                    <form
                                                        class="delete-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                                                        id="deleteProductForm" novalidate="novalidate" method="POST"
                                                        action="{{ route('producto.delete', $producto->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id"
                                                            value="{{ $producto->id }}">
                                                        <button type="submit"
                                                            class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record">
                                                            <i class="ti ti-trash ti-md"></i>
                                                        </button>
                                                    </form>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">Showing 1 to 10 of 50 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                                aria-disabled="true" role="link" data-dt-idx="previous"
                                                tabindex="-1" class="page-link"><i
                                                    class="ti ti-chevron-left ti-sm"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" aria-current="page"
                                                data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="1"
                                                tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="2"
                                                tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="3"
                                                tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="4"
                                                tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" role="link"
                                                data-dt-idx="next" tabindex="0" class="page-link">
                                                <i class="ti ti-chevron-right ti-sm"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="width: 1%;"></div>
                    </div>
                </div>
                <!-- Offcanvas to add new product -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddProduct"
                    aria-labelledby="offcanvasAddProductLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 id="offcanvasAddProductLabel" class="offcanvas-title">Agregar producto</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
                        <form class="add-new-product pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                            id="addNewProductForm" novalidate="novalidate" method="POST"
                            action="{{ route('producto.register') }}">
                            @csrf
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="sku">SKU</label>
                                <input type="text" class="form-control" id="sku" placeholder="SKU"
                                    name="sku" aria-label="sku">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                    name="nombre" aria-label="Nombre">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="descripcion_corta">Descripción Corta</label>
                                <input type="text" id="descripcion_corta" class="form-control phone-mask"
                                    placeholder="Descripción Corta" aria-label="Descripción Corta"
                                    name="descripcion_corta">
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="descripcion_larga">Descripción Larga</label>
                                <input type="text" id="descripcion_larga" class="form-control"
                                    placeholder="Descripción Larga" aria-label="Descripción Larga"
                                    name="descripcion_larga">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="precio_neto">Precio Neto</label>
                                <input type="number" id="precio_neto" class="form-control phone-mask"
                                    placeholder="Ingresa un precio" aria-label="" name="precio_neto" oninput="calculatePrecioVenta()">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="precio_venta">Precio venta</label>
                                <input type="text" id="precio_venta" name="precio_venta"
                                    class="form-control modal-edit-tax-id" placeholder="" readonly/>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="stock_actual">Stock Actual</label>
                                <input type="number" id="stock_actual" class="form-control phone-mask"
                                    placeholder="Ingresa tu stock actual" aria-label="" name="stock_actual">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="stock_minimo">Stock Minimo</label>
                                <input type="number" id="stock_minimo" class="form-control phone-mask"
                                    placeholder="Ingresa tu stock minimo" aria-label="" name="stock_minimo">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="stock_bajo">Stock Bajo</label>
                                <input type="number" id="stock_bajo" class="form-control phone-mask"
                                    placeholder="Ingresa tu stock bajo" aria-label="" name="stock_bajo">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="stock_alto">Stock Alto</label>
                                <input type="number" id="stock_alto" class="form-control phone-mask"
                                    placeholder="Ingresa tu stock alto" aria-label="" name="stock_alto">
                            </div>
                            <button type="submit"
                                class="btn btn-primary me-3 data-submit waves-effect waves-light">Enviar</button>
                            <button type="reset" class="btn btn-label-danger waves-effect"
                                data-bs-dismiss="offcanvas">Cancelar</button>
                            <input type="hidden">
                        </form>
                    </div>
                </div>

                <!-- Modal used in edit function -->
                <div class="modal fade" id="editProduct" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-6">
                                    <h4 class="mb-2">Editar producto</h4>
                                </div>
                                <form id="editProductForm" class="row g-6" method="POST"
                                    action="{{ route('producto.update', $producto->id) }}"
                                    onsubmit="enablePrecioVenta()">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $producto->id }}">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="sku">sku</label>
                                        <input type="text" id="sku" name="sku" class="form-control"
                                            placeholder="sku" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nombre">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control"
                                            placeholder="Actualice el nombre del producto" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="descripcion_corta">Descripcion corta</label>
                                        <input type="text" id="descripcion_corta" name="descripcion_corta"
                                            class="form-control modal-edit-tax-id"
                                            placeholder="Ingrese descripción corta" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="descripcion_larga">Descripcion larga</label>
                                        <input type="text" id="descripcion_larga" name="descripcion_larga"
                                            class="form-control modal-edit-tax-id"
                                            placeholder="Ingrese descripción larga" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="precio_neto">Precio neto</label>
                                        <input type="text" id="precio_neto" name="precio_neto"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese precio neto"
                                            oninput="calculatePrecioVenta()" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="precio_venta">Precio venta</label>
                                        <input type="text" id="precio_venta" name="precio_venta"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese precio venta" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="stock_actual">Stock actual</label>
                                        <input type="text" id="stock_actual" name="stock_actual"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese stock actual" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="stock_minimo">Stock minimo</label>
                                        <input type="text" id="stock_minimo" name="stock_minimo"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese stock minimo" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="stock_bajo">Stock bajo</label>
                                        <input type="text" id="stock_bajo" name="stock_bajo"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese stock bajo" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="stock_alto">Stock alto</label>
                                        <input type="text" id="stock_alto" name="stock_alto"
                                            class="form-control modal-edit-tax-id" placeholder="Ingrese stock alto" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-3">Enviar</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function editProduct(id, nombre, sku, descripcion_corta, descripcion_larga, precio_neto, precio_venta, stock_actual,
        stock_minimo, stock_bajo, stock_alto) {
        document.getElementById('sku').value = sku; // populate fields
        document.getElementById('nombre').value = nombre; // populate fields
        document.getElementById('descripcion_corta').value = descripcion_corta;
        document.getElementById('descripcion_larga').value = descripcion_larga;
        document.getElementById('precio_neto').value = precio_neto;
        document.getElementById('precio_venta').value = precio_venta;
        document.getElementById('stock_actual').value = stock_actual;
        document.getElementById('stock_minimo').value = stock_minimo;
        document.getElementById('stock_bajo').value = stock_bajo;
        document.getElementById('stock_alto').value = stock_alto;
    }

    function calculatePrecioVenta() {
        const precioNeto = parseFloat(document.getElementById('precio_neto').value);
        if (!isNaN(precioNeto)) {
            // Calculate precio_venta with 19% tax
            const precioVenta = Math.round(precioNeto * 1.19);
            document.getElementById('precio_venta').value = precioVenta; // Set the calculated value
        } else {
            document.getElementById('precio_venta').value = ''; // Clear if no valid input
        }
    }

    function filterProducts() {
        const searchInput = document.getElementById('search').value.toLowerCase();
        const userRows = document.querySelectorAll('#productTableBody tr');

        userRows.forEach(row => {
            const userId = row.getAttribute('data-id');
            if (userId && userId.toLowerCase().includes(searchInput)) {
                row.style.display = ''; // Show row
            } else {
                row.style.display = 'none'; // Hide row
            }
        });
    }
</script>
