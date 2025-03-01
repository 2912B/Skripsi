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

    @vite('resources/css/app.css')
    @vite('resources/css/sim-template/amazon/style.css')
    @vite('resources/js/sim-template/amazon/script.js')
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
          <div class="form-group">
            <p class="place">Email or mobile phone number</p>
            <input
              type="text"
              id="email"
              name="email"
              placeholder=""
            />
            <div id="email-error" class="error-text" style="display: none">
                Enter your email or mobile phone number
            </div>
            <button type="submit" class="continue-button">Continue</button>
          </div>
        </form>
        <p class="terms">
            By continuing, you agree to Amazon's
            <a href="#">Conditions of Use</a> and
            <a href="#">Privacy Notice</a>.
        </p>
        <div class="extra-options">
            <a href="#">Need help?</a><br />
        </div>
        <div class="buying-options">
            <p class="buy">Buying for work?</p>
            <a href="#">Shop on Amazon Business</a>
        </div>
      </div>
    </div>

    <div class="new-to-amazon">
        <div class="new-text">
            <a href="">New to Amazon?</a>
        </div>
        <div class="new-account">
            <a href="#">Create your Amazon account</a>
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
