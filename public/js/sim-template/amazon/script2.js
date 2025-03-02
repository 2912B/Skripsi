document.addEventListener("DOMContentLoaded", function () {
    const email = sessionStorage.getItem("email");

    if (!email) {
        window.location.href = "/signin";
    } else {
        document.getElementById("userEmailDisplay").textContent = email;
    }

    document
        .getElementById("login-form")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            const passwordInput = document.getElementById("password");
            const passwordError = document.getElementById("password-error");

            if (!passwordInput.value.trim()) {
                passwordError.style.display = "block";
                passwordError.textContent = "Enter your password.";
                passwordInput.style.border = "2px solid #c02c07";
                passwordInput.focus();
                return false;
            } else {
                passwordError.style.display = "none";
                passwordInput.style.border = "1px solid #242424";

                Swal.fire({
                    title: "Success!",
                    text: "Your account has been taken.",
                    imageUrl: "/img/2077-hacking.svg",
                    imageWidth: 150,
                    imageHeight: 100,
                    confirmButtonText: "OK",
                });

                sessionStorage.removeItem("email");
                return true;
            }
        });

    document.getElementById("password").addEventListener("input", function () {
        if (this.value.trim() !== "") {
            document.getElementById("password-error").style.display = "none";
            this.style.border = "1px solid #242424";
        }
    });
});
