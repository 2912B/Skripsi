<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <script src="{{ asset('js/admin/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/error.js') }}" defer></script>
    <script src="{{ asset('js/reset.js') }}" defer></script>
</head>
<body id="main-content">
    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    @if ($errors->any())
        <script>
            window.errorMessages = `{!! implode('<br>', $errors->all()) !!}`;
            window.errorTitle = 'Failed';
        </script>
    @endif

    @if (session('success'))
        <script>
            window.successMessage = `{{ session('success') }}`;
            window.successTitle = 'Success';
        </script>
    @endif

    <div class="logo">Socity</div>
    <div class="container">
        <h1>Reset Password</h1>
        <form action="{{ route('password.update') }}" method="POST" id="resetForm">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="password_confirmation" required>
            </div>
            <div id="message" class="message"></div>
            <button type="submit" class="neon-button">Submit</button>
        </form>
    </div>
</body>
</html>
