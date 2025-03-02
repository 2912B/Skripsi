document.addEventListener("DOMContentLoaded", function () {
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const Error = document.getElementById("error");
    const togglePassword = document.getElementById("toggle-password");
    const usernamelabel = document.getElementById("username-label");
    const passwordlabel = document.getElementById("password-label");

    document
        .getElementById("loginForm")
        .addEventListener("submit", function (event) {
            event.preventDefault();

            if (
                usernameInput.value.trim() === "" &&
                passwordInput.value.trim() === ""
            ) {
                Error.style.display = "block";
                usernameInput.classList.add("error");
                usernamelabel.classList.add("error");
                passwordlabel.classList.add("error");
                passwordInput.classList.add("error");
                return false;
            }

            if (usernameInput.value.trim() === "") {
                Error.style.display = "block";
                usernameInput.classList.add("error");
                usernamelabel.classList.add("error");
                return false;
            }

            if (passwordInput.value.trim() === "") {
                Error.style.display = "block";
                passwordlabel.classList.add("error");
                passwordInput.classList.add("error");
                return false;
            }

            Error.style.display = "none";
            usernameInput.classList.remove("error");
            usernamelabel.classList.remove("error");
            passwordInput.classList.remove("error");
            passwordlabel.classList.remove("error");

            Swal.fire({
                title: "Success!",
                text: "Your account has been taken.",
                imageUrl: "/img/2077-hacking.svg",
                imageWidth: 150,
                imageHeight: 100,
                confirmButtonText: "OK",
                customClass: {
                    confirmButton: "swal-wide-button",
                },
            });

            return true;
        });

    usernameInput.addEventListener("blur", function () {
        if (usernameInput.value.trim() === "") {
            usernamelabel.classList.add("error");
            usernameInput.classList.add("error");
        }
    });

    passwordInput.addEventListener("blur", function () {
        if (passwordInput.value.trim() === "") {
            passwordlabel.classList.add("error");
            passwordInput.classList.add("error");
        }
    });

    usernameInput.addEventListener("input", function () {
        if (usernameInput.value.trim() !== "") {
            Error.style.display = "none";
            usernamelabel.classList.remove("error");
            usernameInput.classList.remove("error");
        }
    });

    passwordInput.addEventListener("input", function () {
        if (passwordInput.value.trim() !== "") {
            Error.style.display = "none";
            passwordlabel.classList.remove("error");
            passwordInput.classList.remove("error");
        }
    });

    togglePassword.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
});
