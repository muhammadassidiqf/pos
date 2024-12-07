<form class="form" action="{{ route('clients.update', encrypt($data->id)) }}" method="POST" id="edit_clients_modal_form">
    @csrf
    @method('PUT')
    <div class="scroll-y me-n7 pe-7" id="edit_clients_modal_scroll" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
        data-kt-scroll-dependencies="#edit_clients_modal_header" data-kt-scroll-wrappers="#edit_clients_modal_scroll"
        data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="required fs-6 fw-bold mb-2">Name</label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->name }}" name="name"
                placeholder="Sean Bean" required />
        </div>
        <div class="fv-row mb-7">
            <label class="required fs-6 fw-bold mb-2">Merchant Name</label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->user->merchant->name }}"
                name="merchant_name" placeholder="Sean Bean" required />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Email</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                    title="Email address must be active"></i>
            </label>
            <input type="email" class="form-control form-control-solid" value="{{ $data->email }}" name="email"
                placeholder="sean@dellito.com" required />
        </div>
        <div class="fv-row mb-15">
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Address</span>
            </label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->address }}" name="address"
                required />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Phone</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                    title="Phone number must be active"></i>
            </label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->phone }}" name="phone"
                placeholder="+62 8******" required />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">Instagram</label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->instagram }}"
                name="instagram" />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">Website</label>
            <input type="text" class="form-control form-control-solid" value="{{ $data->website }}" name="website" />
        </div>
        <div class="fv-row mb-5 d-flex flex-center">
            <button type="reset" id="edit_clients_modal_cancel" class="btn btn-light me-3">Discard</button>
            <button type="submit" id="edit_clients_modal_submit" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        var checkAddClients = () => {
            e = document.querySelector("#edit_clients_modal_scroll"),
                t = document.querySelector("#edit_clients_modal_submit"),
                a = FormValidation.formValidation(e, {
                    fields: {
                        "name": {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
                        },
                        "email": {
                            validators: {
                                notEmpty: {
                                    message: "Email is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        "phone": {
                            validators: {
                                notEmpty: {
                                    message: "Phone is required"
                                }
                            }
                        },
                        "address": {
                            validators: {
                                notEmpty: {
                                    message: "Address is required"
                                }
                            }
                        },
                        "merchant_name": {
                            validators: {
                                notEmpty: {
                                    message: "Merchant Name is required"
                                }
                            }
                        }
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
                                    "edit_clients_modal_form")
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
        checkAddClients()
    })
</script>
