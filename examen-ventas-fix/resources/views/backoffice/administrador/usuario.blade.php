@extends('backoffice.layouts.app')

@section('title', 'Dashboard | Usuarios')

@section('page-title', 'Dashboard de usuarios de VentasFix')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6 mb-6">
            <div class="card">
                {{--                 <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Filters</h5>
                    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
                        <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize">
                                <option value=""> Select Role </option>
                                <option value="Admin">Admin</option>
                                <option value="Author">Author</option>
                                <option value="Editor">Editor</option>
                                <option value="Maintainer">Maintainer</option>
                                <option value="Subscriber">Subscriber</option>
                            </select></div>
                        <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize">
                                <option value=""> Select Plan </option>
                                <option value="Basic">Basic</option>
                                <option value="Company">Company</option>
                                <option value="Enterprise">Enterprise</option>
                                <option value="Team">Team</option>
                            </select></div>
                        <div class="col-md-4 user_status"><select id="FilterTransaction"
                                class="form-select text-capitalize">
                                <option value=""> Select Status </option>
                                <option value="Pending" class="text-capitalize">Pending</option>
                                <option value="Active" class="text-capitalize">Active</option>
                                <option value="Inactive" class="text-capitalize">Inactive</option>
                            </select></div>
                    </div>
                </div> --}}
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
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
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i
                                                    class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                                                    class="d-none d-sm-inline-block">Registrar un nuevo
                                                    usuario</span></span></button>
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
                                        rowspan="1" colspan="1" style="width: 287px;" aria-sort="descending">Nombre
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 128px;">Apellido</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 89px;">Rut</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 171px;">Email</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149px;">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td class="control dtr-hidden" style="display: none;" tabindex="0"></td>
                                        <td><input type="checkbox" class="form-check-input"></td>
                                        <td>{{ $usuario->nombre }}</td>
                                        <td>{{ $usuario->apellido }}</td>
                                        <td>{{ $usuario->rut }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('usuario.update', $usuario->id) }}"
                                                    class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow"
                                                    data-bs-target="#editUser" data-bs-toggle="modal">
                                                    <i class="fa-solid fa-pencil"></i></a>
                                                <!--<a
                                    href="javascript:;"
                                    class="btn btn-primary me-4"
                                    data-bs-target="#editUser"
                                    data-bs-toggle="modal"
                                    >Edit</a
                                  > -->
                                                <a href="{{ route('usuario.delete', $usuario->id) }}"
                                                    class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasEditUser""><i
                                                        class="ti ti-trash ti-md"></i></a>
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
                            onsubmit="return false" novalidate="novalidate">
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="John Doe"
                                    name="nombre" aria-label="John Doe">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="John Doe"
                                    name="apellido" aria-label="John Doe">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="rut">Rut</label>
                                <input type="text" id="rut" class="form-control phone-mask"
                                    placeholder="12345678-9" aria-label="12345678-9" name="rut">
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-email">Email</label>
                                <input type="email" id="add-user-email" class="form-control"
                                    placeholder="john.doe@ventasfix.cl" aria-label="john.doe@ventasfix.cl"
                                    name="email">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" id="password" class="form-control phone-mask" placeholder="******"
                                    aria-label="" name="password">
                            </div>
                            <button type="submit"
                                class="btn btn-primary me-3 data-submit waves-effect waves-light">Submit</button>
                            <button type="reset" class="btn btn-label-danger waves-effect"
                                data-bs-dismiss="offcanvas">Cancel</button>
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
                                    <h4 class="mb-2">Edit User Information</h4>
                                </div>
                                <form id="editUserForm" class="row g-6" onsubmit="return false">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="name">Nombre</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Actualice su nombre" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="apellido">Apellido</label>
                                        <input type="text" id="apellido" name="apellido" class="form-control"
                                            placeholder="Actualice su apellido" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="rut">RUT</label>
                                        <input type="text" id="rut" name="rut"
                                            class="form-control modal-edit-tax-id" placeholder="12345678-9" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="example@ventasfix.cl" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Actualice su contraseña" />
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
