<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk ke akun Microsoft Anda</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
      rel="stylesheet"
    />

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">

    <link rel="stylesheet" href="{{ asset('css/sim-template/microsoft/pwd.css') }}">
    <script src="{{ asset('js/sim-template/microsoft/pwd.js') }}" defer></script>
  </head>
  <body>
    <div class="formcontainer">
      <div class="container" id="container">
        <img
          src="https://blogs.microsoft.com/wp-content/uploads/prod/2012/08/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen.jpg"
          alt="Microsoft Logo"
          class="logo"
        />

        <p id="userEmailDisplay" class="userEmailDisplay">
          Loading user data...
        </p>

        <h1>Masukkan kata sandi</h1>

        <div id="error-message" class="error-message" style="display: none">
          Masukkan kata sandi untuk Microsoft Anda.
        </div>
        <input
          type="text"
          id="passwordInput"
          class="input-field"
          placeholder="Kata sandi"
          required
        />
        <a href="#">Lupa kata sandi?</a>

        <div class="button-container" id="button-container">
          <button class="btn-primary" type="button" id="submitButton">
            Masuk
          </button>
        </div>
      </div>
    </div>

    <div class="footer-right">
      <p>
        <a href="#">Ketentuan penggunaan</a> <a href="#">Privasi & cookie</a>
      </p>
    </div>

    <div class="footer-right2">
      <p>
        Gunakan penjelajahan privat jika ini bukan perangkat Anda.
        <a href="#" class="href2">Pelajari selengkapnya</a>
      </p>
    </div>
  </body>
</html>
