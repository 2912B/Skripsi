const wrapper = document.querySelector(".wrapper");
const registerLink = document.querySelector(".register-link");
const loginLink = document.querySelector(".login-link");

registerLink.onclick = () => {
    wrapper.classList.add("active");
};

loginLink.onclick = () => {
    wrapper.classList.remove("active");
};

document.addEventListener("DOMContentLoaded", function () {
    const toggleLoginPassword = document.getElementById("toggleLoginPassword");
    const loginPasswordInput = document.getElementById("login_password");
    const loginEyeIcon = document.getElementById("loginEyeIcon");

    toggleLoginPassword.addEventListener("click", function () {
        const type =
            loginPasswordInput.getAttribute("type") === "password"
                ? "text"
                : "password";
        loginPasswordInput.setAttribute("type", type);
        loginEyeIcon.classList.toggle("fa-eye-slash");
        loginEyeIcon.classList.toggle("fa-eye");
    });

    const toggleRegisPassword = document.getElementById("toggleRegisPassword");
    const regisPasswordInput = document.getElementById("regis_password");
    const regisEyeIcon = document.getElementById("regisEyeIcon");

    toggleRegisPassword.addEventListener("click", function () {
        const type =
            regisPasswordInput.getAttribute("type") === "password"
                ? "text"
                : "password";
        regisPasswordInput.setAttribute("type", type);
        regisEyeIcon.classList.toggle("fa-eye-slash");
        regisEyeIcon.classList.toggle("fa-eye");
    });

    const toggleConfirmPassword = document.getElementById(
        "toggleConfirmPassword"
    );
    const confirmPasswordInput = document.getElementById("cpassword");
    const confirmEyeIcon = document.getElementById("confirmEyeIcon");

    toggleConfirmPassword.addEventListener("click", function () {
        const type =
            confirmPasswordInput.getAttribute("type") === "password"
                ? "text"
                : "password";
        confirmPasswordInput.setAttribute("type", type);
        confirmEyeIcon.classList.toggle("fa-eye-slash");
        confirmEyeIcon.classList.toggle("fa-eye");
    });

    const registrationForm = document.getElementById("registrationForm");
    if (registrationForm) {
        registrationForm.addEventListener("submit", function (event) {
            let username = document.getElementById("regis_username").value;
            let password = document.getElementById("regis_password").value;
            let confirmPassword = document.getElementById("cpassword").value;

            username = sanitizeInput(username);
            username = htmlspecialchars(username);
            password = sanitizeInput(password);
            password = htmlspecialchars(password);
            confirmPassword = sanitizeInput(confirmPassword);
            confirmPassword = htmlspecialchars(confirmPassword);

            if (username.length > 120) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Username must be 120 characters or less.",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
                return;
            }

            if (password.length < 8 || password.length > 20) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Password must be between 8 and 20 characters.",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
                return;
            }

            if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(password)) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Password must contain at least one lowercase, uppercase, and number.",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Confirm Password must be the same with New Password.",
                    confirmButtonText: "OK",
                });
                event.preventDefault();
                return;
            }

            document.getElementById("regis_username").value = username;
            document.getElementById("regis_password").value = password;
            document.getElementById("cpassword").value = confirmPassword;
        });
    }

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
});
