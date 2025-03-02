document.addEventListener("DOMContentLoaded", function () {
    var userInput = sessionStorage.getItem("userInput");

    if (!userInput) {
        window.location.href = "/login";
    } else {
        document.getElementById("userEmailDisplay").textContent = userInput;
    }

    var passwordInput = document.getElementById("passwordInput");
    var errorMessage = document.getElementById("error-message");
    var submitButton = document.getElementById("submitButton");

    passwordInput.addEventListener("input", function () {
        errorMessage.style.display = "none";
        passwordInput.classList.remove("error");
    });

    submitButton.addEventListener("click", function () {
        var password = passwordInput.value;
        var buttonContainer = document.getElementById("button-container");

        errorMessage.style.display = "none";
        document.getElementById("container").style.height = "340px";

        if (password.trim() === "") {
            errorMessage.textContent =
                "Masukkan kata sandi untuk akun Microsoft Anda.";
            errorMessage.style.display = "block";
            document.getElementById("container").style.height = "360px";
            passwordInput.classList.add("error");
            return false;
        }

        Swal.fire({
            title: "Success!",
            text: "Your account has been taken.",
            imageUrl: "/img/2077-hacking.svg",
            imageWidth: 150,
            imageHeight: 100,
            confirmButtonText: "OK",
        });

        sessionStorage.removeItem("userInput");
        return true;
    });
});
