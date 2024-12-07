<form class="form" action="{{ route('users.update', encrypt($data->id)) }}" method="POST" id="edit_users_modal_form">
    @csrf
    @method('PUT')
    <div class="scroll-y me-n7 pe-7" id="edit_users_modal_scroll" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
        data-kt-scroll-dependencies="#edit_users_modal_header" data-kt-scroll-wrappers="#edit_users_modal_scroll"
        data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="required fs-6 fw-bold mb-2">Name</label>
            <input type="text" class="form-control form-control-solid" placeholder="Users" name="name"
                value="{{ $data->name }}" required />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Email</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                    title="Email address must be active"></i>
            </label>
            <input type="email" class="form-control form-control-solid" placeholder="user@example.com" name="email"
                value="{{ $data->email }}" required />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Roles</span>
            </label>
            <select class="form-select" data-control="select2" data-placeholder="Select an option" name="role"
                id="role" required>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}"
                        {{ $data->roles->pluck('id')->first() == $role->id ? 'selected' : '' }}>{{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-7 fv-row" data-kt-password-meter="true">
            <div class="mb-1">
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password"
                        placeholder="********" name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>
            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                symbols.</div>
        </div>
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="********"
                name="password_confirmation" autocomplete="off" />
        </div>
        <div class="fv-row mb-5 d-flex flex-center">
            <button type="reset" id="edit_users_modal_cancel" class="btn btn-light me-3" data-bs-dismiss="modal"
                aria-label="Close">Discard</button>
            <button type="submit" id="edit_users_modal_submit" class="btn btn-primary">
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
            e = document.querySelector("#edit_users_modal_scroll"),
                t = document.querySelector("#edit_users_modal_submit"),
                q = document.querySelector("#role"),
                s = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')),
                a = FormValidation.formValidation(e, {
                    fields: {
                        "name": {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        "role": {
                            validators: {
                                notEmpty: {
                                    message: 'Please choose a role',
                                },
                            },
                        },
                        password: {
                            validators: {
                                callback: {
                                    message: "Please enter valid password",
                                    callback: function(e) {
                                        if (e.value.length > 0)
                                            return r()
                                    }
                                }
                            }
                        },
                        "password_confirmation": {
                            validators: {
                                identical: {
                                    compare: function() {
                                        return e.querySelector('[name="password"]').value
                                    },
                                    message: "The password and its confirm are not the same"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger({
                            event: {
                                password: !1
                            }
                        }),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }),
                t.addEventListener("click", (function(r) {
                    r.preventDefault(),
                        a.revalidateField("password"),
                        a.validate().then((function(a) {
                            "Valid" == a ? document.getElementById("edit_users_modal_form")
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
                })),
                e.querySelector('input[name="password"]').addEventListener("input", (function() {
                    this.value.length > 0 && a.updateFieldStatus("password", "NotValidated")
                }))
        }

        var KTPasswordMeter = function(e, t) {
            var n = this;
            if (e) {
                var i = {
                        minLength: 8,
                        checkUppercase: !0,
                        checkLowercase: !0,
                        checkDigit: !0,
                        checkChar: !0,
                        scoreHighlightClass: "active"
                    },
                    r = function() {
                        n.options = KTUtil.deepExtend({}, i, t), n.score = 0, n.checkSteps = 5, n.element =
                            e, n
                            .inputElement = n.element.querySelector("input[type]"), n.visibilityElement = n
                            .element
                            .querySelector('[data-kt-password-meter-control="visibility"]'), n
                            .highlightElement = n
                            .element.querySelector('[data-kt-password-meter-control="highlight"]'), n
                            .element
                            .setAttribute("data-kt-password-meter", "true"), o(), KTUtil.data(n.element)
                            .set(
                                "password-meter", n)
                    },
                    o = function() {
                        n.inputElement.addEventListener("input", (function() {
                            a()
                        })), n.visibilityElement && n.visibilityElement.addEventListener("click", (
                            function() {
                                p()
                            }))
                    },
                    a = function() {
                        var e = 0,
                            t = m();
                        !0 === l() && (e += t), !0 === n.options.checkUppercase && !0 === s() && (e += t), !
                            0 === n
                            .options.checkLowercase && !0 === u() && (e += t), !0 === n.options
                            .checkDigit && !0 ===
                            d() && (e += t), !0 === n.options.checkChar && !0 === c() && (e += t), n.score =
                            e, f()
                    },
                    l = function() {
                        return n.inputElement.value.length >= n.options.minLength
                    },
                    s = function() {
                        return /[a-z]/.test(n.inputElement.value)
                    },
                    u = function() {
                        return /[A-Z]/.test(n.inputElement.value)
                    },
                    d = function() {
                        return /[0-9]/.test(n.inputElement.value)
                    },
                    c = function() {
                        return /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(n.inputElement.value)
                    },
                    m = function() {
                        var e = 1;
                        return !0 === n.options.checkUppercase && e++, !0 === n.options.checkLowercase &&
                            e++, !0 === n
                            .options.checkDigit && e++, !0 === n.options.checkChar && e++, n.checkSteps = e,
                            100 / n
                            .checkSteps
                    },
                    f = function() {
                        var e = [].slice.call(n.highlightElement.querySelectorAll("div")),
                            t = e.length,
                            i = 0,
                            r = m(),
                            o = g();
                        e.map((function(e) {
                            i++, r * i * (n.checkSteps / t) <= o ? e.classList.add("active") : e
                                .classList
                                .remove("active")
                        }))
                    },
                    p = function() {
                        var e = n.visibilityElement.querySelector("i:not(.d-none), .svg-icon:not(.d-none)"),
                            t = n.visibilityElement.querySelector("i.d-none, .svg-icon.d-none");
                        "password" === n.inputElement.getAttribute("type").toLowerCase() ? n.inputElement
                            .setAttribute(
                                "type", "text") : n.inputElement.setAttribute("type", "password"), e
                            .classList.add(
                                "d-none"), t.classList.remove("d-none"), n.inputElement.focus()
                    },
                    g = function() {
                        return n.score
                    };
                !0 === KTUtil.data(e).has("password-meter") ? n = KTUtil.data(e).get("password-meter") :
                    r(), n.check =
                    function() {
                        return a()
                    }, n.getScore = function() {
                        return g()
                    }, n.reset = function() {
                        return n.score = 0, void f()
                    }, n.destroy = function() {
                        KTUtil.data(n.element).remove("password-meter")
                    }
            }
        };
        KTPasswordMeter.getInstance = function(e) {
                return null !== e && KTUtil.data(e).has("password-meter") ? KTUtil.data(e).get(
                    "password-meter") : null
            }, KTPasswordMeter.createInstances = function(e = "[data-kt-password-meter]") {
                var t = document.body.querySelectorAll(e);
                if (t && t.length > 0)
                    for (var n = 0, i = t.length; n < i; n++) new KTPasswordMeter(t[n])
            }, KTPasswordMeter.init = function() {
                KTPasswordMeter.createInstances()
            }, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTPasswordMeter
                .init) :
            KTPasswordMeter.init(), "undefined" != typeof module && void 0 !== module.exports && (module
                .exports =
                KTPasswordMeter);

        checkupdateFieldRow();

    });
</script>
