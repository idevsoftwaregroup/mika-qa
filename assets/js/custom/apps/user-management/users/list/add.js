"use strict";
var KTUsersAddUser = (function () {
    const t = document.getElementById("kt_modal_add_user"),
        e = t.querySelector("#kt_modal_add_user_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        user_name: {
                            validators: { notEmpty: { message: "Full name is required" } },
                        },
                        user_email: {
                            validators: {
                                notEmpty: { message: "Valid email address is required" },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                });
                const i = t.querySelector('[data-kt-users-modal-action="submit"]');
                i.addEventListener("click", (t) => {
                    t.preventDefault(),
                        o &&
                        o.validate().then(function (t) {
                            // console.log("validated!"),
                            console.log("Form Submitted by Arash ..."),
                                "Valid" == t
                                    ? (i.setAttribute("data-kt-indicator", "on"),
                                        (i.disabled = !0),
                                        setTimeout(function () {
                                            i.removeAttribute("data-kt-indicator"),
                                                (i.disabled = !1),
                                                Swal.fire({
                                                    text: "Form has been successfully submitted!",
                                                    icon: "success",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: { confirmButton: "btn btn-primary" },
                                                }).then(function (t) {
                                                    t.isConfirmed && n.hide();
                                                });
                                        }, 2e3))
                                    : Swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-primary" },
                                    });
                            localStorage.setItem("username", $('input[name="user_name"]').val())
                            localStorage.setItem("password", $('input[name="password"]').val())
                            localStorage.setItem("phone", $('input[name="phone"]').val())
                            localStorage.setItem("jobtitle", $('input[name="jobtitle"]').val())
                            localStorage.setItem("company", $('input[name="company"]').val())
                            localStorage.setItem("description", $('input[name="desc"]').val())
                            localStorage.setItem("position", $('input[name="position"]').val())
                            // Get values from localStorage
                            var username = localStorage.getItem("username");
                            var password = localStorage.getItem("password");
                            var phone = localStorage.getItem("phone");
                            var jobtitle = localStorage.getItem("jobtitle");
                            var company = localStorage.getItem("company");
                            var description = localStorage.getItem("description");
                            var position = localStorage.getItem("position");
                            // console.log("username:", username)

                            // AJAX request to PHP script
                            $.ajax({
                                type: 'POST',
                                url: '/apps/user-management/users/adduser.php', // Replace with your PHP script URL
                                data: {
                                    username: username,
                                    password: password,
                                    phone: phone,
                                    jobtitle: jobtitle,
                                    company: company,
                                    description: description,
                                    position: position
                                },
                                success: function (response) {
                                    console.log(response); // Handle the response from the server
                                }
                            });


                            // Populate hidden inputs with localStorage values
                            document.getElementById("username").value = localStorage.getItem("username");
                            document.getElementById("password").value = localStorage.getItem("password");
                            document.getElementById("phone").value = localStorage.getItem("phone");
                            document.getElementById("jobtitle").value = localStorage.getItem("jobtitle");
                            document.getElementById("company").value = localStorage.getItem("company");
                            document.getElementById("description").value = localStorage.getItem("description");
                            document.getElementById("position").value = localStorage.getItem("position");

                            // Submit form when the page loads
                            document.getElementById("userForm").submit();

                        });
                }),
                    t
                        .querySelector('[data-kt-users-modal-action="cancel"]')
                        .addEventListener("click", (t) => {
                            t.preventDefault(),
                                Swal.fire({
                                    text: "Are you sure you would like to cancel?",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    buttonsStyling: !1,
                                    confirmButtonText: "Yes, cancel it!",
                                    cancelButtonText: "No, return",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                        cancelButton: "btn btn-active-light",
                                    },
                                }).then(function (t) {
                                    t.value
                                        ? (e.reset(), n.hide())
                                        : "cancel" === t.dismiss &&
                                        Swal.fire({
                                            text: "Your form has not been cancelled!.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: { confirmButton: "btn btn-primary" },
                                        });
                                });
                        }),
                    t
                        .querySelector('[data-kt-users-modal-action="close"]')
                        .addEventListener("click", (t) => {
                            t.preventDefault(),
                                Swal.fire({
                                    text: "Are you sure you would like to cancel?",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    buttonsStyling: !1,
                                    confirmButtonText: "Yes, cancel it!",
                                    cancelButtonText: "No, return",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                        cancelButton: "btn btn-active-light",
                                    },
                                }).then(function (t) {
                                    t.value
                                        ? (e.reset(), n.hide())
                                        : "cancel" === t.dismiss &&
                                        Swal.fire({
                                            text: "Your form has not been cancelled!.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: { confirmButton: "btn btn-primary" },
                                        });
                                });
                        });
            })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTUsersAddUser.init();
});
