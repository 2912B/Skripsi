document.addEventListener("DOMContentLoaded", function () {
    const changeUsernameButton = document.getElementById(
        "changeUsernameButton"
    );
    const changePasswordButton = document.getElementById(
        "changePasswordButton"
    );
    const usernameModal = document.getElementById("changeUsernameModal");
    const passwordModal = document.getElementById("changePasswordModal");
    const closeButtons = document.querySelectorAll(".close");
    const changePasswordForm = document.getElementById("changePasswordForm");
    const changeUsernameForm = document.getElementById("changeUsernameForm");
    const newUsernameInput = document.getElementById("newUsername");
    const newPasswordInput = document.getElementById("newPassword");
    const confirmPasswordInput = document.getElementById("confirmPassword");

    changeUsernameButton.addEventListener("click", function () {
        usernameModal.style.display = "block";
    });

    changePasswordButton.addEventListener("click", function () {
        passwordModal.style.display = "block";
    });

    closeButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            button.closest(".modal").style.display = "none";
            clearFormInputs();
        });
    });

    window.addEventListener("click", function (event) {
        if (event.target === usernameModal) {
            usernameModal.style.display = "none";
            clearFormInputs();
        }
        if (event.target === passwordModal) {
            passwordModal.style.display = "none";
            clearFormInputs();
        }
    });

    function sanitizeInput(input) {
        const temp = document.createElement("div");
        temp.textContent = input;
        return temp.innerHTML;
    }

    function htmlspecialchars(text) {
        const map = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#039;",
        };
        return String(text).replace(/[&<>"']/g, function (char) {
            return map[char];
        });
    }

    function clearFormInputs() {
        if (newUsernameInput) newUsernameInput.value = "";
        if (newPasswordInput) newPasswordInput.value = "";
        if (confirmPasswordInput) confirmPasswordInput.value = "";
    }

    if (changePasswordForm) {
        changePasswordForm.addEventListener("submit", function (event) {
            const newPassword = htmlspecialchars(
                sanitizeInput(document.getElementById("newPassword").value)
            );
            const confirmPassword = htmlspecialchars(
                sanitizeInput(document.getElementById("confirmPassword").value)
            );

            if (!newPassword || !confirmPassword) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Password can't be empty",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            } else if (newPassword !== confirmPassword) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Confirm Password must be the same with New Password",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            } else if (newPassword.length < 8 || newPassword.length > 20) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Password must be between 8 and 20 characters",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(newPassword)) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Password must contain at least one lowercase, uppercase, and number",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            }
        });
    }

    if (changeUsernameForm) {
        changeUsernameForm.addEventListener("submit", function (event) {
            const newUsername = htmlspecialchars(
                sanitizeInput(document.getElementById("newUsername").value)
            );
            if (!newUsername) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Username can't be empty",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            } else if (newUsername.length > 120) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Username must be 120 characters or less",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
            }
        });
    }
});
