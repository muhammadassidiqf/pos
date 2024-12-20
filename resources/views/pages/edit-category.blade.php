<form class="form" action="{{ route('category.update', encrypt($data->id)) }}" method="POST"
    id="edit_category_modal_form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="scroll-y me-n7 pe-7" id="edit_category_modal_scroll" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
        data-kt-scroll-dependencies="#edit_category_modal_header" data-kt-scroll-wrappers="#edit_category_modal_scroll"
        data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="required fs-6 fw-bold mb-2">Name</label>
            <input type="text" class="form-control form-control-solid" placeholder="Users" name="name"
                value="{{ $data->name }}" required />
        </div>
        <div class="fv-row mb-7">
            <div class="row">
                <label class="required fs-6 fw-bold mb-2">Image</label>
            </div>
            <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true"
                style="background-image: url('{{ !empty($data->image) ? asset('storage/img/category/' . $data->image) : asset('media/svg/avatars/blank.svg') }}')">
                <div class="image-input-wrapper w-125px h-125px"></div>

                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                    <i class="bi bi-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                    <input type="file" name="image" accept=".png, .jpg, .jpeg, .svg" />
                    <input type="hidden" name="image_remove" />
                </label>

                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                    <i class="bi bi-x-circle fs-3"></i>
                </span>

                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                    <i class="bi bi-eraser fs-3"></i>
                </span>
            </div>
            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
        </div>
        <div class="fv-row mb-5 d-flex flex-center">
            <button type="reset" id="edit_category_modal_cancel" class="btn btn-light me-3" data-bs-dismiss="modal"
                aria-label="Close">Discard</button>
            <button type="submit" id="edit_category_modal_submit" class="btn btn-primary">
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
            e = document.querySelector("#edit_category_modal_scroll"),
                t = document.querySelector("#edit_category_modal_submit"),
                a = FormValidation.formValidation(e, {
                    fields: {
                        "name": {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
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
                                    "edit_category_modal_form")
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
        var KTImageInput = function(e, t) {
            var n = this;
            if (null != e) {
                var i = {},
                    r = function() {
                        n.options = KTUtil.deepExtend({}, i, t), n.uid = KTUtil.getUniqueId("image-input"),
                            n.element = e, n.inputElement = KTUtil.find(e, 'input[type="file"]'), n
                            .wrapperElement = KTUtil.find(e, ".image-input-wrapper"), n.cancelElement =
                            KTUtil.find(e, '[data-kt-image-input-action="cancel"]'), n.removeElement =
                            KTUtil.find(e, '[data-kt-image-input-action="remove"]'), n.hiddenElement =
                            KTUtil.find(e, 'input[type="hidden"]'), n.src = KTUtil.css(n.wrapperElement,
                                "backgroundImage"), n.element.setAttribute("data-kt-image-input", "true"),
                            o(), KTUtil.data(n.element).set("image-input", n)
                    },
                    o = function() {
                        KTUtil.addEvent(n.inputElement, "change", a), KTUtil.addEvent(n.cancelElement,
                            "click", l), KTUtil.addEvent(n.removeElement, "click", s)
                    },
                    a = function(e) {
                        if (e.preventDefault(), null !== n.inputElement && n.inputElement.files && n
                            .inputElement.files[0]) {
                            if (!1 === KTEventHandler.trigger(n.element, "kt.imageinput.change", n)) return;
                            var t = new FileReader;
                            t.onload = function(e) {
                                KTUtil.css(n.wrapperElement, "background-image", "url(" + e.target
                                    .result + ")")
                            }, t.readAsDataURL(n.inputElement.files[0]), KTUtil.addClass(n.element,
                                "image-input-changed"), KTUtil.removeClass(n.element,
                                "image-input-empty"), KTEventHandler.trigger(n.element,
                                "kt.imageinput.changed", n)
                        }
                    },
                    l = function(e) {
                        e.preventDefault(), !1 !== KTEventHandler.trigger(n.element, "kt.imageinput.cancel",
                            n) && (KTUtil.removeClass(n.element, "image-input-changed"), KTUtil
                            .removeClass(n.element, "image-input-empty"), KTUtil.css(n.wrapperElement,
                                "background-image", n.src), n.inputElement.value = "", null !== n
                            .hiddenElement && (n.hiddenElement.value = "0"), KTEventHandler.trigger(n
                                .element, "kt.imageinput.canceled", n))
                    },
                    s = function(e) {
                        e.preventDefault(), !1 !== KTEventHandler.trigger(n.element, "kt.imageinput.remove",
                            n) && (KTUtil.removeClass(n.element, "image-input-changed"), KTUtil
                            .addClass(n.element, "image-input-empty"), KTUtil.css(n.wrapperElement,
                                "background-image", "none"), n.inputElement.value = "", null !== n
                            .hiddenElement && (n.hiddenElement.value = "1"), KTEventHandler.trigger(n
                                .element, "kt.imageinput.removed", n))
                    };
                !0 === KTUtil.data(e).has("image-input") ? n = KTUtil.data(e).get("image-input") : r(), n
                    .getInputElement = function() {
                        return n.inputElement
                    }, n.goElement = function() {
                        return n.element
                    }, n.destroy = function() {
                        KTUtil.data(n.element).remove("image-input")
                    }, n.on = function(e, t) {
                        return KTEventHandler.on(n.element, e, t)
                    }, n.one = function(e, t) {
                        return KTEventHandler.one(n.element, e, t)
                    }, n.off = function(e) {
                        return KTEventHandler.off(n.element, e)
                    }, n.trigger = function(e, t) {
                        return KTEventHandler.trigger(n.element, e, t, n, t)
                    }
            }
        };
        KTImageInput.getInstance = function(e) {
            return null !== e && KTUtil.data(e).has("image-input") ? KTUtil.data(e).get("image-input") :
                null
        }, KTImageInput.createInstances = function(e = "[data-kt-image-input]") {
            var t = document.querySelectorAll(e);
            if (t && t.length > 0)
                for (var n = 0, i = t.length; n < i; n++) new KTImageInput(t[n])
        }, KTImageInput.init = function() {
            KTImageInput.createInstances()
        }, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTImageInput
            .init) : KTImageInput.init(), "undefined" != typeof module && void 0 !== module.exports && (
            module.exports = KTImageInput);

        checkupdateFieldRow();

    });
</script>
