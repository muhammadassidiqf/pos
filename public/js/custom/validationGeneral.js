"use strict";
var AddUserGeneral = function () {
    var e, t, a, s, q, r = function () {
        return 100 === s.getScore()
    };
    var checkAddFieldRow = () => {
        e = document.querySelector("#add_users_modal_scroll"),
            t = document.querySelector("#add_users_modal_submit"),
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
                            notEmpty: {
                                message: "The password is required"
                            },
                            callback: {
                                message: "Please enter valid password",
                                callback: function (e) {
                                    if (e.value.length > 0)
                                        return r()
                                }
                            }
                        }
                    },
                    "password_confirmation": {
                        validators: {
                            notEmpty: {
                                message: "The password confirmation is required"
                            },
                            identical: {
                                compare: function () {
                                    return e.querySelector('[name="password"]').value
                                },
                                message: "The password and its confirm are not the same"
                            }
                        }
                    }
                },
                plugins: { trigger: new FormValidation.plugins.Trigger({ event: { password: !1 } }), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) }
            }),
            t.addEventListener("click", (function (r) {
                r.preventDefault(),
                    a.revalidateField("password"),
                    a.validate().then((function (a) {
                        "Valid" == a ? document.getElementById("add_users_modal_form").submit() : Swal.fire({ text: "Sorry, looks like there are some errors detected, please try again.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } })
                    }))
            })),
            e.querySelector('input[name="password"]').addEventListener("input", (function () { this.value.length > 0 && a.updateFieldStatus("password", "NotValidated") }))
    }
    return {
        init: function () {
            checkAddFieldRow();
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    AddUserGeneral.init()
}));