const wrapper = document.querySelector(".wrapper");
const registerLink = document.querySelector(".register-link");
const loginLink = document.querySelector(".login-link");

registerLink.onclick = () => {
    wrapper.classList.add("active");
};

loginLink.onclick = () => {
    wrapper.classList.remove("active");
};

// Popup Function
document.addEventListener("DOMContentLoaded", function () {
    // Show error popup
    if (window.errorMessage) {
        Swal.fire({
            icon: "error",
            title: window.errorTitle,
            text: window.errorMessage,
            confirmButtonText: "Close",
        });
    }

    // Redirect to Home Page
    if (window.successMessage) {
        window.location.href = "/";
    }
});

// Password Visible and Not Visible
document.addEventListener("DOMContentLoaded", function () {
    // Login Password Toggle
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

    // Registration Password Toggle
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

    // Confirm Password Toggle
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
});
