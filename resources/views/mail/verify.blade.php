<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/css/mail/verify.css')
    @vite('resources/js/particlejs.js')

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/mail/verify.css') }}">

    <script src="{{ asset('js/particlejs.js') }}" defer></script>
</head>
<body id="main-content">
    @if (session('success'))
        <script>
            window.successMessage = `{{ session('success') }}`;
            window.successTitle = 'Success';
        </script>
    @endif

    <div class="container">
        <h1>RESEND VERIFY</h1>
        <p>Please verify your email through the email we've sent you</p><br><br>
        <p>Didn't receive the verification email?</p>
        <p>Click below to resend the verification link:</p>
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button class="btn">Resend Verification</button>
        </form>
    </div>
</body>
</html>
