<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Socyty</title>

    <!-- CSS style and font-->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/navbar/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simulation/dashboard.css') }}">

    <script src="{{ asset('js/error.js') }}" defer></script>
    <script src="{{ asset('js/particlejs.js') }}" defer></script>
</head>
<body class="h-full">
    <div class="bg-cover bg-center">
        {{-- NavBar --}}
        <x-navbar.navbar></x-navbar.navbar>

        <!-- Main Content -->
        <main class="main-content" id="main-content">
            <!-- Your content -->
            {{ $slot }}
        </main>

        <footer>
            <div class="container">
              <h5 class="logofooter">Socyty</h5>
              <p>© 2024 Socyty, All Rights Reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
