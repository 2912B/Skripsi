document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("login-form")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            const emailInput = document.getElementById("email");
            const emailError = document.getElementById("email-error");

            const emailPattern =
                /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            const phonePattern = /^[0-9]{10,12}$/;

            if (!emailInput.value) {
                emailError.style.display = "block";
                emailError.textContent =
                    "Enter your email or mobile phone number";
                emailInput.style.border = "2px solid #c02c07";
                return false;
            } else if (
                !emailPattern.test(emailInput.value) &&
                !phonePattern.test(emailInput.value)
            ) {
                emailError.style.display = "block";
                emailError.textContent =
                    "Wrong or Invalid email address or mobile phone number. Please correct and try again. ";
                emailInput.style.border = "2px solid #c02c07";
                return false;
            } else {
                emailError.style.display = "none";
                emailInput.style.border = "1px solid #242424";

                sessionStorage.setItem("email", emailInput.value);
                window.location.href = "/ap/signin";
                emailInput.inputMode.value = "";
                return true;
            }
        });

    emailInput.addEventListener("input", function () {
        if (emailInput.value.trim() !== "") {
            emailError.style.display = "none";
            emailInput.style.border = "1px solid #242424";
        }
    });
});
