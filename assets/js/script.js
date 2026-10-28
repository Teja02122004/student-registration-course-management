```javascript
"use strict";

/*
 * StudentHub client-side form validation.
 * PHP must independently validate all submitted data.
 */

document.addEventListener("DOMContentLoaded", function () {

    const registrationForm = document.getElementById("registrationForm");
    const loginForm = document.getElementById("loginForm");


    // Student registration validation

    if (registrationForm) {

        registrationForm.addEventListener("submit", function (event) {

            const name = document.getElementById("fullName");
            const email = document.getElementById("email");
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("confirmPassword");
            const phone = document.getElementById("phone");
            const course = document.getElementById("course");

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phonePattern = /^\+?[0-9\s()-]{7,20}$/;

            if (name && name.value.trim().length < 2) {
                event.preventDefault();
                alert("Please enter your full name.");
                name.focus();
                return;
            }

            if (email && !emailPattern.test(email.value.trim())) {
                event.preventDefault();
                alert("Please enter a valid email address.");
                email.focus();
                return;
            }

            if (phone && !phonePattern.test(phone.value.trim())) {
                event.preventDefault();
                alert("Please enter a valid phone number.");
                phone.focus();
                return;
            }

            if (password && password.value.length < 8) {
                event.preventDefault();
                alert("Password must contain at least 8 characters.");
                password.focus();
                return;
            }

            if (
                password &&
                confirmPassword &&
                password.value !== confirmPassword.value
            ) {
                event.preventDefault();
                alert("Passwords do not match.");
                confirmPassword.focus();
                return;
            }

            if (course && !course.value) {
                event.preventDefault();
                alert("Please select a course.");
                course.focus();
            }

        });

    }


    // Student login validation

    if (loginForm) {

        loginForm.addEventListener("submit", function (event) {

            const email = document.getElementById("loginEmail");
            const password = document.getElementById("loginPassword");

            if (!email || !email.value.trim()) {
                event.preventDefault();
                alert("Please enter your registered email address.");

                if (email) {
                    email.focus();
                }

                return;
            }

            if (!password || !password.value) {
                event.preventDefault();
                alert("Please enter your password.");

                if (password) {
                    password.focus();
                }
            }

        });

    }

});
```
