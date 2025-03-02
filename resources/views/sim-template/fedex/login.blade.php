<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

    <link rel="stylesheet" href="{{ asset('css/sim-template/fedex/style.css') }}">
    <script src="{{ asset('js/sim-template/fedex/script.js') }}" defer></script>
</head>
<body>
    <header>
        <div class="logo">Fed<span class="ex">Ex</span></div>
        <nav>
            <ul>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Tracking</a></li>
                <li><a href="#">Design & Print</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <main>
            <h2>Enter your user ID and password to log in</h2>
            <a href="#" class="register">CREATE A USER ID</a>
            <form id="loginForm">
                <label for="username" id="username-label">User ID</label>
                <div class="username-container">
                    <input type="text" id="username" name="username">
                </div>

                <label for="password" id="password-label">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password">
                    <span class="toggle-password" id="toggle-password">👁</span>
                </div>
                <p class="error-message" id="error">❌ Both user ID and password are required to log in. </p>

                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember my user ID.</label>
                </div>

                <button type="submit">LOG IN</button>
            </form>

            <a href="#" class="forgot">FORGOT YOUR USER ID OR PASSWORD?</a>

            <h1>Need help?</h1>
            <a href="#" class="customer">CUSTOMER SUPPORT</a>
        </main>
    </div>
</body>
</html>
