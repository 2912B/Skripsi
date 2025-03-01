document.addEventListener("DOMContentLoaded", function () {
    const translations = {
        en: {
            googleLogoAlt: "Google Logo",
            headerText: "Verification Code",
            subtitleText:
                "Enter the verification code to continue to Google Drive",
            passwordPlaceholder: "Enter your code",
            passwordLabel: "Enter the verification code",
            nextButton: "Send",
            languageDropdown: "English (United States)",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        "en-uk": {
            googleLogoAlt: "Google Logo",
            headerText: "Verification Code",
            subtitleText:
                "Enter the verification code to continue to Google Drive",
            passwordPlaceholder: "Enter your code",
            passwordLabel: "Enter the verification code",
            nextButton: "Send",
            languageDropdown: "English (United Kingdom)",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        de: {
            googleLogoAlt: "Google-Logo",
            headerText: "Bestätigungscode",
            subtitleText:
                "Geben Sie den Bestätigungscode ein, um mit Google Drive fortzufahren",
            passwordPlaceholder: "Geben Sie Ihren Code ein",
            passwordLabel: "Geben Sie den Bestätigungscode ein",
            nextButton: "Senden",
            languageDropdown: "Deutsch",
            helpLink: "Hilfe",
            privacyLink: "Datenschutz",
            termsLink: "Nutzungsbedingungen",
        },
        "es-es": {
            googleLogoAlt: "Logotipo de Google",
            headerText: "Código de verificación",
            subtitleText:
                "Introduce el código de verificación para continuar con Google Drive",
            passwordPlaceholder: "Introduce tu código",
            passwordLabel: "Introduce el código de verificación",
            nextButton: "Enviar",
            languageDropdown: "Español (España)",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        "es-la": {
            googleLogoAlt: "Logotipo de Google",
            headerText: "Código de verificación",
            subtitleText:
                "Introduce el código de verificación para continuar con Google Drive",
            passwordPlaceholder: "Introduce tu código",
            passwordLabel: "Introduce el código de verificación",
            nextButton: "Enviar",
            languageDropdown: "Español (Latinoamérica)",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        et: {
            googleLogoAlt: "Google'i logo",
            headerText: "Kinnitus kood",
            subtitleText: "Sisestage kinnituskood, et Google Drive'i jätkata",
            passwordPlaceholder: "Sisestage oma kood",
            passwordLabel: "Sisestage kinnituskood",
            nextButton: "Saada",
            languageDropdown: "eesti",
            helpLink: "Abi",
            privacyLink: "Privaatsus",
            termsLink: "Tingimused",
        },
        fil: {
            googleLogoAlt: "Google Logo",
            headerText: "Code ng Verification",
            subtitleText: "Ilagay ang code para magpatuloy sa Google Drive",
            passwordPlaceholder: "Ilagay ang iyong code",
            passwordLabel: "Ilagay ang code ng verification",
            nextButton: "Ipadala",
            languageDropdown: "Filipino",
            helpLink: "Tulong",
            privacyLink: "Privacy",
            termsLink: "Mga Tuntunin",
        },
        "fr-ca": {
            googleLogoAlt: "Logo Google",
            headerText: "Code de vérification",
            subtitleText:
                "Entrez le code de vérification pour continuer à Google Drive",
            passwordPlaceholder: "Entrez votre code",
            passwordLabel: "Entrez le code de vérification",
            nextButton: "Envoyer",
            languageDropdown: "Français (Canada)",
            helpLink: "Aide",
            privacyLink: "Confidentialité",
            termsLink: "Conditions",
        },
        id: {
            googleLogoAlt: "Logo Google",
            headerText: "Kode Verifikasi",
            subtitleText:
                "Masukkan kode verifikasi untuk melanjutkan ke Google Drive",
            passwordPlaceholder: "Masukkan kode Anda",
            passwordLabel: "Masukkan kode verifikasi",
            nextButton: "Kirim",
            languageDropdown: "Bahasa Indonesia",
            helpLink: "Bantuan",
            privacyLink: "Privasi",
            termsLink: "Persyaratan",
        },
    };

    const updateLanguage = (lang) => {
        const translation = translations[lang];
        if (translation) {
            document.querySelector(".login-header").textContent =
                translation.headerText;
            document.querySelector(".login-subtitle").textContent =
                translation.subtitleText;
            document.querySelector(".floating-label").textContent =
                translation.passwordLabel;
            document.querySelector(".input-field").placeholder =
                translation.passwordPlaceholder;
            document.querySelector(".next-button").textContent =
                translation.nextButton;
            const footerLinks = document.querySelectorAll(".TNC a");
            footerLinks[0].textContent = translation.helpLink;
            footerLinks[1].textContent = translation.privacyLink;
            footerLinks[2].textContent = translation.termsLink;
        }
    };

    const dropdownButton = document.getElementById("languageDropdown");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownArrow = document.getElementById("dropdownArrow");

    dropdownButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("show");
        dropdownArrow.classList.toggle("up");
    });

    const dropdownItems = dropdownMenu.querySelectorAll(".dropdown-item");
    dropdownItems.forEach((item) => {
        item.addEventListener("click", (event) => {
            dropdownItems.forEach((i) => i.classList.remove("selected"));
            event.target.classList.add("selected");
            const selectedLang = event.target.getAttribute("data-lang");
            dropdownButton.childNodes[0].textContent = event.target.textContent;
            updateLanguage(selectedLang);
            dropdownMenu.classList.remove("show");
            dropdownArrow.classList.remove("up");
        });
    });

    document.addEventListener("click", (event) => {
        if (
            !dropdownButton.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.classList.remove("show");
            dropdownArrow.classList.remove("up");
        }
    });

    const verificationInput = document.getElementById("verificationCode");
    const sendButton = document.querySelector(".next-button");
    const errorText = document.getElementById("error-text");
    const loginContainer = document.querySelector(".login-container");

    sendButton.addEventListener("click", () => {
        const code = verificationInput.value.trim();

        // Validation logic
        if (code === "") {
            errorText.style.display = "block";
            errorText.textContent = "Please enter the verification code.";
            verificationInput.focus();

            loginContainer.style.height = "455px";
        } else if (!/^\d+$/.test(code)) {
            errorText.style.display = "block";
            errorText.textContent =
                "Invalid code. Only numeric values are allowed.";
            verificationInput.focus();

            loginContainer.style.height = "455px";
        } else if (code.length !== 6) {
            errorText.style.display = "block";
            errorText.textContent =
                "Invalid code. Code must be 6 characters long.";
            verificationInput.focus();

            loginContainer.style.height = "455px";
        } else {
            errorText.style.display = "none";
            loginContainer.style.height = "425px";

            Swal.fire({
                title: "Success!",
                text: "Verification code is valid. Your account has been taken.",
                imageUrl: "/img/2077-hacking.svg",
                imageWidth: 150,
                imageHeight: 100,
                confirmButtonText: "OK",
            });

            verificationInput.value = "";
        }
    });

    verificationInput.addEventListener("input", () => {
        if (verificationInput.value.trim() !== "") {
            errorText.style.display = "none";
            loginContainer.style.height = "455px";
        }
    });
});
