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
                                                    class="d-none d-sm-inline-block">Add New User</span></span></button>
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
                                                    data-bs-target="#editUser"
                                                    data-bs-toggle="modal">
                                                    <i class="fa-solid fa-pencil"></i></a>
                                                    <!--<a
                            href="javascript:;"
                            class="btn btn-primary me-4"
                            data-bs-target="#editUser"
                            data-bs-toggle="modal"
                            >Edit</a
                          > -->
                                                <a href="{{ route('usuario.delete', $usuario->id) }}"
                                                    class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditUser""><i
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
                                <label class="form-label" for="add-user-fullname">Full Name</label>
                                <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                    name="userFullname" aria-label="John Doe">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-email">Email</label>
                                <input type="text" id="add-user-email" class="form-control"
                                    placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                                    name="userEmail">
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="add-user-contact">Contact</label>
                                <input type="text" id="add-user-contact" class="form-control phone-mask"
                                    placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com"
                                    name="userContact">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="add-user-company">Company</label>
                                <input type="text" id="add-user-company" class="form-control"
                                    placeholder="Web Developer" aria-label="jdoe1" name="companyName">
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="country">Country</label>
                                <div class="position-relative"><select id="country"
                                        class="select2 form-select select2-hidden-accessible" data-select2-id="country"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 352px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-country-container"><span
                                                    class="select2-selection__rendered" id="select2-country-container"
                                                    role="textbox" aria-readonly="true"><span
                                                        class="select2-selection__placeholder">Select
                                                        Country</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="user-role">User Role</label>
                                <select id="user-role" class="form-select">
                                    <option value="subscriber">Subscriber</option>
                                    <option value="editor">Editor</option>
                                    <option value="maintainer">Maintainer</option>
                                    <option value="author">Author</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="user-plan">Select Plan</label>
                                <select id="user-plan" class="form-select">
                                    <option value="basic">Basic</option>
                                    <option value="enterprise">Enterprise</option>
                                    <option value="company">Company</option>
                                    <option value="team">Team</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-primary me-3 data-submit waves-effect waves-light">Submit</button>
                            <button type="reset" class="btn btn-label-danger waves-effect"
                                data-bs-dismiss="offcanvas">Cancel</button>
                            <input type="hidden">
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                      <div class="modal-content">
                        <div class="modal-body">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="text-center mb-6">
                            <h4 class="mb-2">Edit User Information</h4>
                            <p>Updating user details will receive a privacy audit.</p>
                          </div>
                          <form id="editUserForm" class="row g-6" onsubmit="return false">
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserFirstName">First Name</label>
                              <input
                                type="text"
                                id="modalEditUserFirstName"
                                name="modalEditUserFirstName"
                                class="form-control"
                                placeholder="John"
                                value="John" />
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserLastName">Last Name</label>
                              <input
                                type="text"
                                id="modalEditUserLastName"
                                name="modalEditUserLastName"
                                class="form-control"
                                placeholder="Doe"
                                value="Doe" />
                            </div>
                            <div class="col-12">
                              <label class="form-label" for="modalEditUserName">Username</label>
                              <input
                                type="text"
                                id="modalEditUserName"
                                name="modalEditUserName"
                                class="form-control"
                                placeholder="johndoe007"
                                value="johndoe007" />
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserEmail">Email</label>
                              <input
                                type="text"
                                id="modalEditUserEmail"
                                name="modalEditUserEmail"
                                class="form-control"
                                placeholder="example@domain.com"
                                value="example@domain.com" />
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserStatus">Status</label>
                              <select
                                id="modalEditUserStatus"
                                name="modalEditUserStatus"
                                class="select2 form-select"
                                aria-label="Default select example">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                              </select>
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditTaxID">Tax ID</label>
                              <input
                                type="text"
                                id="modalEditTaxID"
                                name="modalEditTaxID"
                                class="form-control modal-edit-tax-id"
                                placeholder="123 456 7890"
                                value="123 456 7890" />
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                              <div class="input-group">
                                <span class="input-group-text">US (+1)</span>
                                <input
                                  type="text"
                                  id="modalEditUserPhone"
                                  name="modalEditUserPhone"
                                  class="form-control phone-number-mask"
                                  placeholder="202 555 0111"
                                  value="202 555 0111" />
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserLanguage">Language</label>
                              <select
                                id="modalEditUserLanguage"
                                name="modalEditUserLanguage"
                                class="select2 form-select"
                                multiple>
                                <option value="">Select</option>
                                <option value="english" selected>English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="dutch">Dutch</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="sanskrit">Sanskrit</option>
                                <option value="hindi">Hindi</option>
                              </select>
                            </div>
                            <div class="col-12 col-md-6">
                              <label class="form-label" for="modalEditUserCountry">Country</label>
                              <select
                                id="modalEditUserCountry"
                                name="modalEditUserCountry"
                                class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India" selected>India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="editBillingAddress" />
                                <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
                              </div>
                            </div>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary me-3">Submit</button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary"
                                data-bs-dismiss="modal"
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
