document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("resetForm")
        .addEventListener("submit", function (event) {
            const email = document.getElementById("email").value;
            const messageDiv = document.getElementById("message");

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                messageDiv.textContent = "Please enter a valid email address.";
                messageDiv.classList.add("error");
                messageDiv.classList.remove("success");
                event.preventDefault();
                return;
            }

            if (email) {
                messageDiv.textContent = "Password reset link sent to " + email;
                messageDiv.classList.add("success");
                messageDiv.classList.remove("error");
            } else {
                messageDiv.textContent = "An error occurred. Please try again.";
                messageDiv.classList.add("error");
                messageDiv.classList.remove("success");
                event.preventDefault();
                return;
            }
        });
});
