<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simulation</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/js/particlejs.js')
    @vite('resources/css/simulation/passwordsecurity.css')
    @vite('resources/js/simulation/passwordsecurity.js')
</head>
<body id="main-content">
    <div class="container">
        <h1>Password Security Simulation</h1>
        <p>Enter a password below to test its security level:</p>
        <form id="password-form" method="POST" onsubmit="return false;">
            @csrf
            <div class="password-container">
                <input
                    type="password"
                    id="password-input"
                    class="password-input"
                    placeholder="Enter your password"
                />
                <span id="toggle-password-visibility" class="toggle-visibility">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
            </div>
            <button type="button" class="check-button">Check Password</button>
        </form>
        <div id="feedback" class="feedback"></div>
        <ul id="criteria-list" class="criteria-list">
            <li id="length-criteria" class="criteria-item">At least 8 characters</li>
            <li id="uppercase-criteria" class="criteria-item">Contains an uppercase letter</li>
            <li id="lowercase-criteria" class="criteria-item">Contains a lowercase letter</li>
            <li id="number-criteria" class="criteria-item">Contains a number</li>
            <li id="special-criteria" class="criteria-item">Contains a special character (!, @, #, etc.)</li>
        </ul>
    </div>

    <div class="navigation-buttons">
        <button id="home-button" class="nav-button">Home</button>
        <button id="simulation-button" class="nav-button">Back to Simulation</button>
    </div>
</body>
</html>
