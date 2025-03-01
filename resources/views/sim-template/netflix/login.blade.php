<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix</title>

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

    @vite('resources/css/app.css')
    @vite('resources/css/sim-template/netflix/style.css')
    @vite('resources/js/sim-template/netflix/script.js')
  </head>
  <body>
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg"
      alt="Netflix Logo"
      class="netflix-logo"
    />
    <div class="container">
      <div class="sign-in-box">
        <h2>Masuk</h2>
        <form class="login-form" id="login-form">
          <div class="input-container">
            <input type="text" id="email" />
            <label for="email">Email atau nomor ponsel</label>
          </div>
          <p class="error-message" id="email-error">
            ❌ Masukkan email atau nomor telepon yang valid.
          </p>
          <div class="input-container">
            <input type="password" id="password" />
            <label for="password">Sandi</label>
          </div>
          <p class="error-message" id="password-error">
            ❌ Sandi harus berisi antara 4 hingga 60 karakter.
          </p>
          <button type="submit">Masuk</button>
        </form>
        <div class="or-divider">
          <span>ATAU</span>
        </div>
        <button class="sign-in-code">Gunakan Kode Masuk</button>
        <a href="#" class="forgot-password">Lupa sandi?</a>
        <input type="checkbox" id="remember-me" />
        <label for="remember-me" class="remember">Ingat saya</label>
        <p class="newcomers">
          Baru di Netflix? <a href="#">Daftar sekarang.</a>
        </p>
        <p class="disclaimer">
          Halaman ini dilindungi oleh Google reCAPTCHA untuk memastikan bahwa
          kamu bukan bot.
          <a href="https://help.netflix.com/id">Pelajari lebih lanjut</a>.
        </p>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
