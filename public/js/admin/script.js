document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (username.trim() === "" || password.trim() === "") {
                Swal.fire({
                    icon: "error",
                    title: window.errorTitle || "Error",
                    text: "Invalid username and password",
                    confirmButtonText: "OK",
                });

                event.preventDefault();
                return false;
            }

            return true;
        });
    }
});
