"use strict";
const formAuthentication = document.querySelector("#formAuthentication");
document.addEventListener("DOMContentLoaded", function (e) {
    var t;
    formAuthentication &&
        FormValidation.formValidation(formAuthentication, {
            fields: {
                username: { validators: { notEmpty: { message: "لطفا نام کاربری موردنظر را وارد کنید" }, stringLength: { min: 6, message: "نام کاربری باید بیش از 6 کاراکتر باشد" } } },
                email: { validators: { notEmpty: { message: "لطفا ایمیل خود را وارد کنید" }, emailAddress: { message: "ایمیل نامعتبر است" } } },
                "email-username": { validators: { notEmpty: { message: "لطفا ایمیل / نام کاربری را وارد کنید" }, stringLength: { min: 6, message: "نام کاربری باید بیش از 6 کاراکتر باشد" } } },
                password: { validators: { notEmpty: { message: "لطفا رمز عبور موردنطر را تعیین کنید" }, stringLength: { min: 8, message: "رمز عبور باید بیش از 8 کاراکتر باشد" } } },
                "تکرار رمز عبور": {
                    validators: {
                        notEmpty: { message: "لطفا رمز عبور را تکرار کنید" },
                        identical: {
                            compare: function () {
                                return formAuthentication.querySelector('[name="password"]').value;
                            },
                            message: "رمزعبور با تکرار آن یکسان نیست",
                        },
                        stringLength: { min: 6, message: "رمز عبور باید بیش از 8 کاراکتر باشد" },
                    },
                },
                terms: { validators: { notEmpty: { message: "لطفا با قوانین و شرایط سودآور موافقت نمایید" } } },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({ eleValidClass: "", rowSelector: ".mb-3" }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                autoFocus: new FormValidation.plugins.AutoFocus(),
            },
            init: (e) => {
                e.on("plugins.message.placed", function (e) {
                    e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement);
                });
            },
        }),
        (t = document.querySelectorAll(".numeral-mask")).length &&
            t.forEach((e) => {
                new Cleave(e, { numeral: !0 });
            });
});
