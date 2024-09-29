@extends('backoffice.layouts.app')

@section('title', 'Dashboard | Clientes')

@section('page-title', 'Dashboard de Clientes de VentasFix')

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
                                    <button class="btn btn-secondary add-new btn-primary waves-effect waves-light me-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                                        <span>
                                            <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                            <span class="d-none d-sm-inline-block">Registrar un nuevo cliente</span>
                                        </span>
                                    </button>
                                    <input type="text" id="search" placeholder="Buscar por ID" oninput="filterClients()" class="form-control" style="width: 250px;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="ms-n2">
                                    <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                                name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                                class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div
                                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-6 mb-md-0 mt-n6 mt-md-0">
                                    <div class="dt-buttons flex-wrap pt-5">
                                        <button class="btn btn-secondary add-new btn-primary waves-effect waves-light"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                                            <span>
                                                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                                <span class="d-none d-sm-inline-block">Registrar un nuevo
                                                    Cliente
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                        rowspan="1" colspan="1" style="width: 287px;" aria-sort="descending">Rut
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 128px;">Rubro</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 89px;">Razón Social</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Teléfono</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">Dirección
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">Persona de contacto
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">Email de contacto
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="clientTableBody">
                                @foreach ($clientes as $cliente)
                                    <tr data-id="{{ $cliente->id }}">
                                        <td class="control dtr-hidden" style="display: none;" tabindex="0"></td>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>{{ $cliente->rut_empresa }}</td>
                                        <td>{{ $cliente->rubro }}</td>
                                        <td>{{ $cliente->razon_social }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->direccion }}</td>
                                        <td>{{ $cliente->nombre_persona_contacto }}</td>
                                        <td>{{ $cliente->email_persona_contacto }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-icon btn-text-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#editUser">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                <form class="delete-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                                                    id="deleteUserForm" novalidate="novalidate" method="POST"
                                                    action="{{ route('cliente.delete', $cliente->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $cliente->id }}">
                                                    <button type="submit"
                                                        class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record">
                                                        <i class="ti ti-trash ti-md"></i>
                                                    </button>
                                                </form>

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
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                                href="#" aria-controls="DataTables_Table_0" role="link"
                                                data-dt-idx="next" tabindex="0" class="page-link"><i
                                                    class="ti ti-chevron-right ti-sm"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="width: 1%;"></div>
                    </div>
                </div>
                <!-- Offcanvas to add new user -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                    aria-labelledby="offcanvasAddUserLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
                        <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                            novalidate="novalidate" method="POST" action="{{ route('cliente.register') }}">
                            @csrf
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="rut_empresa">Rut</label>
                                <input type="text" class="form-control" id="rut_empresa" placeholder="Rut"
                                    name="rut_empresa" aria-label="Rut">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="rubro">Rubro</label>
                                <input type="text" class="form-control" id="rubro" placeholder="Rubro"
                                    name="rubro" aria-label="Rubro">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="razon_social">Razón Social</label>
                                <input type="text" id="razon_social" class="form-control phone-mask"
                                    placeholder="Razón Social" aria-label="Razón Social" name="razon_social">
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="telefono">Teléfono</label>
                                <input type="text" id="telefono" class="form-control"
                                    placeholder="Teléfono" aria-label="Teléfono"
                                    name="telefono">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="direccion">Dirección</label>
                                <input type="text" id="direccion" class="form-control phone-mask"
                                    placeholder="Dirección" aria-label="Dirección" name="direccion">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="nombre_persona_contacto">Nombre de Persona de Contacto</label>
                                <input type="text" id="nombre_persona_contacto" class="form-control phone-mask"
                                    placeholder="Nombre y Apellido" aria-label="Nombre y Apellido" name="nombre_persona_contacto">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="email_persona_contacto">Email de Persona de Contacto</label>
                                <input type="email" id="email_persona_contacto" class="form-control phone-mask"
                                    placeholder="contacto@correo.cl" aria-label="contacto@correo.cl" name="email_persona_contacto">
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
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-6">
                                    <h4 class="mb-2">Editar Cliente</h4>
                                </div>
                                <form id="editUserForm" class="row g-6" method="POST"
                                    action="{{ route('cliente.update', $cliente->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $cliente->id }}">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="rut_empresa">Rut</label>
                                        <input type="text" id="rut_empresa" name="rut_empresa" class="form-control"
                                            placeholder="Actualice su rut" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="rubro">Rubro</label>
                                        <input type="text" id="rubro" name="rubro" class="form-control"
                                            placeholder="Actualice su rubro"/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="razon_social">Razón Social</label>
                                        <input type="text" id="razon_social" name="razon_social"
                                            class="form-control modal-edit-tax-id" placeholder="Actualice su razón social"/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="telefono">Teléfono</label>
                                        <input type="text" id="telefono" name="telefono" class="form-control"
                                            placeholder="Actualice su teléfono"/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="direccion">Dirección</label>
                                        <input type="text" id="direccion" name="direccion" class="form-control"
                                            placeholder="Actualice su dirección" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nombre_persona_contacto">Nombre de Persona de Contacto</label>
                                        <input type="text" id="nombre_persona_contacto" name="nombre_persona_contacto" class="form-control"
                                            placeholder="Actualice su nombre de persona de contacto" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="email_persona_contacto">Email de Persona de Contacto</label>
                                        <input type="text" id="email_persona_contacto" name="email_persona_contacto" class="form-control"
                                            placeholder="Actualice su email de persona de contacto" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-3">Enviar</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Cancelar
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
    function editUser(id, rut_empresa, rubro, razon_social, telefono, direccion, nombre_persona_contacto, email_persona_contacto) {
        document.getElementById('rut_empresa').value = rut_empresa; // populate fields
        document.getElementById('rubro').value = rubro;
        document.getElementById('razon_social').value = razon_social;
        document.getElementById('telefono').value = telefono;
        document.getElementById('direccion').value = direccion;
        document.getElementById('nombre_persona_contacto').value = nombre_persona_contacto;
        document.getElementById('email_persona_contacto').value = email_persona_contacto;
    }

    function filterClients() {
        const searchInput = document.getElementById('search').value.toLowerCase();
        const userRows = document.querySelectorAll('#clientTableBody tr');

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
