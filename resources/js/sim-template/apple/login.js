document.addEventListener("DOMContentLoaded", function () {
    // Handle form submission with validation
    document
        .getElementById("login-form")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            const appleId = document.getElementById("apple-id").value;
            const password = document.getElementById("password").value;
            const appleIdlabel = document.getElementById("label1");
            const error = document.getElementById("error");

            const emailPattern =
                /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (appleId === "") {
                error.style.display = "block";
                return false;
            }

            if (password === "") {
                error.style.display = "block";
                return false;
            }

            if (!emailPattern.test(appleId)) {
                error.style.display = "block";
                appleIdlabel.style.color = "red";
                return false;
            }

            error.style.display = "none";
            appleIdlabel.style.color = "#999";
            showVerificationPopup();
            return true;
        });

    function showVerificationPopup() {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("popup").style.display = "block";
    }

    const otpInputs = document.querySelectorAll(
        "#otp1, #otp2, #otp3, #otp4, #otp5, #otp6"
    );

    otpInputs.forEach((input, index) => {
        input.addEventListener("input", function () {
            if (input.value.length === 1 && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }

            const allFilled = Array.from(otpInputs).every(
                (input) => input.value.length === 1
            );
            if (allFilled) {
                verifyCode();
            }
        });
    });

    document
        .getElementById("cancel-btn")
        .addEventListener("click", function () {
            // Clear OTP fields
            otpInputs.forEach((input) => {
                input.value = "";
            });
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        });

    function verifyCode() {
        const otpCode = Array.from(otpInputs)
            .map((input) => input.value)
            .join("");
        if (otpCode.length === 6) {
            // Clear OTP fields
            otpInputs.forEach((input) => {
                input.value = "";
            });
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";

            Swal.fire({
                title: "Success!",
                text: "Your account has been taken.",
                imageUrl: "/img/2077-hacking.svg",
                imageWidth: 150,
                imageHeight: 100,
                confirmButtonText: "OK",
            });
        } else {
            alert("Please enter a valid 6-digit verification code.");
        }
    }
});
