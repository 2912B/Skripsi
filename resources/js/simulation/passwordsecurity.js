document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password-input");
    const feedback = document.getElementById("feedback");
    const checkButton = document.querySelector(".check-button");
    const toggleVisibility = document.getElementById(
        "toggle-password-visibility"
    );
    const criteriaList = {
        length: document.getElementById("length-criteria"),
        uppercase: document.getElementById("uppercase-criteria"),
        lowercase: document.getElementById("lowercase-criteria"),
        number: document.getElementById("number-criteria"),
        special: document.getElementById("special-criteria"),
    };
    const homeButton = document.getElementById("home-button");
    const simulationButton = document.getElementById("simulation-button");

    const checkPasswordStrength = (password) => {
        const checks = {
            length: password.length >= 8,
            uppercase: /[A-Z]/.test(password),
            lowercase: /[a-z]/.test(password),
            number: /\d/.test(password),
            special: /[!@#$%^&*(),.?":{}|<>]/.test(password),
        };

        let passCount = 0;
        for (const [key, passed] of Object.entries(checks)) {
            if (passed) {
                criteriaList[key].classList.add("pass");
                criteriaList[key].classList.remove("fail");
                passCount++;
            } else {
                criteriaList[key].classList.add("fail");
                criteriaList[key].classList.remove("pass");
            }
        }

        if (passCount === 5) {
            feedback.textContent = "✅ Strong Password!";
            feedback.style.color = "#4CAF50";
        } else if (passCount >= 3) {
            feedback.textContent = "⚠️ Medium Strength Password!";
            feedback.style.color = "#FFC107";
        } else {
            feedback.textContent = "❌ Weak Password!";
            feedback.style.color = "#f44336";
        }
    };

    checkButton.addEventListener("click", function () {
        const password = passwordInput.value.trim();
        if (password) {
            checkPasswordStrength(password);
        } else {
            feedback.textContent = "❌ Please enter a password!";
            feedback.style.color = "#f44336";
        }
    });

    toggleVisibility.addEventListener("click", function () {
        const isPasswordVisible = passwordInput.type === "text";
        passwordInput.type = isPasswordVisible ? "password" : "text";
        toggleVisibility.innerHTML = `<i class="fa ${
            isPasswordVisible ? "fa-eye" : "fa-eye-slash"
        }" aria-hidden="true"></i>`;
    });

    homeButton.addEventListener("click", function () {
        window.location.href = "/";
    });

    simulationButton.addEventListener("click", function () {
        window.location.href = "/simulation";
    });
});
