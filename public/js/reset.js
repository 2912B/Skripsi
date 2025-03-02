document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("resetForm")
        .addEventListener("submit", function (event) {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword =
                document.getElementById("confirmPassword").value;
            const messageDiv = document.getElementById("message");

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                messageDiv.textContent = "Please enter a valid email address.";
                messageDiv.classList.add("error");
                messageDiv.classList.remove("success");
                event.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                messageDiv.textContent = "Passwords do not match.";
                messageDiv.classList.add("error");
                messageDiv.classList.remove("success");
                event.preventDefault();
                return;
            }

            if (password.length < 8) {
                messageDiv.textContent =
                    "Password must be at least 8 characters long.";
                messageDiv.classList.add("error");
                messageDiv.classList.remove("success");
                event.preventDefault();
                return;
            }

            // Simulate password reset (replace with actual backend logic)
            if (email && password && confirmPassword) {
                messageDiv.textContent = "Password reset successfully!";
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
