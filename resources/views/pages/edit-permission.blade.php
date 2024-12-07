<form class="form" action="{{ route('permission.update', encrypt($data->id)) }}" method="POST"
    id="edit_permission_modal_form">
    @csrf
    @method('PUT')
    <div class="scroll-y me-n7 pe-7" id="edit_permission_modal_scroll" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
        data-kt-scroll-dependencies="#edit_permission_modal_header"
        data-kt-scroll-wrappers="#edit_permission_modal_scroll" data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="required fs-6 fw-bold mb-2">Name</label>
            <input type="text" class="form-control form-control-solid" placeholder="Users" name="name"
                value="{{ $data->name }}" required />
        </div>
        <div class="fv-row mb-5 d-flex flex-center">
            <button type="reset" id="edit_permission_modal_cancel" class="btn btn-light me-3" data-bs-dismiss="modal"
                aria-label="Close">Discard</button>
            <button type="submit" id="edit_permission_modal_submit" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </div>
</form>
<script>
    $(document).ready(function() {
        var checkupdateFieldRow = () => {
            e = document.querySelector("#edit_permission_modal_scroll"),
                t = document.querySelector("#edit_permission_modal_submit"),
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
                            "Valid" == a ? document.getElementById(
                                    "edit_permission_modal_form")
                                .submit() :
                                Swal.fire({
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

        checkupdateFieldRow();

    });
</script>