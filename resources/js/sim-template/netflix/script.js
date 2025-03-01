document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".input-container input");
    const form = document.getElementById("login-form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");

    document
        .getElementById("login-form")
        .addEventListener("submit", function (event) {
            event.preventDefault();

            if (emailInput.value.trim() === "") {
                emailError.textContent =
                    "Masukkan email atau nomor telepon yang valid.";
                emailError.style.display = "block";
                emailInput.classList.add("error-border");
                return false;
            }

            if (passwordInput.value.trim() === "") {
                passwordError.textContent =
                    "Sandi harus berisi antara 4 hingga 60 karakter.";
                passwordError.style.display = "block";
                passwordInput.classList.add("error-border");
                return false;
            }

            if (
                passwordInput.value.length < 4 ||
                passwordInput.value.length > 60
            ) {
                passwordError.textContent =
                    "Sandi harus berisi antara 4 hingga 60 karakter.";
                passwordError.style.display = "block";
                passwordInput.classList.add("error-border");
                return false;
            }

            emailError.style.display = "none";
            emailInput.classList.remove("error-border");
            passwordError.style.display = "none";
            passwordInput.classList.remove("error-border");

            Swal.fire({
                title: "Success!",
                text: "Your account has been taken.",
                imageUrl: "/img/2077-hacking.svg",
                imageWidth: 150,
                imageHeight: 100,
                confirmButtonText: "OK",
            });

            return true;
        });

    inputs.forEach((input) => {
        input.value = "";
        input.classList.remove("not-empty");
    });

    inputs.forEach((input) => {
        const label = input.parentElement.querySelector("label");
        const errorMessage = input.parentElement.nextElementSibling;

        input.addEventListener("focus", function () {
            this.parentElement.classList.add("active");
            errorMessage.style.display = "none";
        });

        input.addEventListener("blur", function () {
            if (!this.value.trim()) {
                this.parentElement.classList.remove("active");
                errorMessage.style.display = "block";
                this.classList.add("error-border");
                this.classList.remove("not-empty");
            } else {
                this.classList.remove("error-border");
                this.classList.add("not-empty");
                errorMessage.style.display = "none";
            }
        });

        if (input.value.trim() !== "") {
            input.classList.add("not-empty");
        }
    });
});
