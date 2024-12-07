@extends('layouts.app')
@section('content-admin')
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <input type="text" data-kt-customer-table-filter="search"
                            class="form-control form-control-solid w-250px ps-15" placeholder="Search Roles" />
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_roles_modal">Add Roles</button>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_roles_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th>
                                No
                            </th>
                            <th class="min-w-125px text-center">Roles Name</th>
                            <th class="min-w-125px text-center">Permission</th>
                            <th class="min-w-125px text-center">Created At</th>
                            <th class="min-w-70px text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold text-gray-600">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('modals')
    <div class="modal fade" id="add_roles_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="{{ route('roles.store') }}" method="POST" id="add_roles_modal_form">
                    @csrf
                    <div class="modal-header" id="add_roles_modal_header">
                        <h2 class="fw-bolder">Add a Roles</h2>
                        <div id="add_roles_modal_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="add_roles_modal_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#add_roles_modal_header"
                            data-kt-scroll-wrappers="#add_roles_modal_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                                <label class="required fs-6 fw-bold mb-2">Name</label>
                                <input type="text" class="form-control form-control-solid" placeholder="Users"
                                    name="name" required />
                            </div>
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-bold mb-2">
                                    <span class="required">Permission</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Email address must be active"></i>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true" multiple multiple="multiple"
                                    name="permission[]" id="permission" required>
                                    @foreach ($permission as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="add_roles_modal_cancel" class="btn btn-light me-3"
                            data-bs-dismiss="modal" aria-label="Close">Discard</button>
                        <button type="submit" id="add_roles_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_roles_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="edit_roles_modal_header">
                    <h2 class="fw-bolder">Edit a Roles</h2>
                    <div id="edit_roles_modal_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                        data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body py-10 px-lg-17">
                    <div class="col-12 text-center">
                        <div class="spinner-border spinner-border-lg text-primary" role="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
@section('scripts')
    @parent
    <script>
        $(document).ready(function() {
            var table = $('#kt_roles_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('roles.list') }}",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center'
                    },
                    {
                        data: 'permission',
                        name: 'permission',
                        className: 'text-center'
                    },
                    {
                        data: 'waktu',
                        name: 'waktu',
                        className: 'text-center'
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        className: 'text-center'
                    }
                ]
            });
            $('#edit_roles_modal').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var modal = $(this);
                modal.find('.modal-body').empty()
                modal.find('.modal-body').html(
                    '<div class="col-12 text-center"><div class="spinner-border spinner-border-lg text-secondary" role="status"></div></div>'
                )
                modal.find('.modal-body').load(button.data("remote"));
            });

        })
    </script>
    <script>
        $(document).ready(function() {
            var checkAddRoledRow = () => {
                e = document.querySelector("#add_roles_modal_scroll"),
                    t = document.querySelector("#add_roles_modal_submit"),
                    a = FormValidation.formValidation(e, {
                        fields: {
                            "name": {
                                validators: {
                                    notEmpty: {
                                        message: "Name is required"
                                    }
                                }
                            },
                            'permission[]': {
                                validators: {
                                    choice: {
                                        min: 1,
                                        message: 'Please choose 1 permission you use',
                                    },
                                },
                            },
                        },
                        plugins: {
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }),
                    t.addEventListener("click", (function(r) {
                        r.preventDefault(),
                            a.validate().then((function(a) {
                                "Valid" == a ? document.getElementById("add_roles_modal_form")
                                    .submit() : Swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    })
                            }))
                    }))
            }
            checkAddRoledRow()
        })
    </script>
@endsection
