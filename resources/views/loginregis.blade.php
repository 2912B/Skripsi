<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">

    <script src="{{ asset('js/admin/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/error.js') }}" defer></script>
    <script src="{{ asset('js/loginscript.js') }}" defer></script>


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

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        {{-- Login Form --}}
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>

            <form action="{{ route('loginOrRegister') }}" method="post">
                @csrf
                <input type="hidden" name="action" value="login">

                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="login_identifier" id="login_username" placeholder=" " required>
                    <label>Username/Email</label>
                    <box-icon name='user'></box-icon>
                    <div class="icons"><x-bxs-user class="h-4 w-7"/></div>
                </div>

                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" id="login_password" name="password" placeholder=" " required autocomplete="off">
                    <label>Password</label>
                    <span class="eye" id="toggleLoginPassword" style="cursor: pointer;">
                        <i class="fa fa-eye" id="loginEyeIcon"></i>
                    </span>
                </div>

                <button type="submit" class="button animation" style="--i:3; --j:24;">Login</button>
                <div class="loginregis-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Register Here</a></p>
                </div>

                <div class="forgotpass-link animation" style="--i:5; --j:26;">
                    <p>Forget Your Password? <a href="/forgetpassword" class="forgotpass-link">Forget Pass</a></p>
                </div>
            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21;">Input Your Credentials Here!</p>
        </div>

        {{-- Registration Form --}}
        <div class="form-box regis">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>

            <form action="{{ route('loginOrRegister') }}" method="post">
                @csrf
                <input type="hidden" name="action" value="register">

                <div class="input-box regis animation" style="--i:18; --j:1;">
                    <input type="text" id="regis_username" name="username" placeholder=" " required>
                    <label>Username</label>
                    <box-icon name='user'></box-icon>
                    <div class="icons"><x-bxs-user class="h-4 w-7"/></div>
                </div>

                <div class="input-box regis animation" style="--i:19; --j:2;">
                    <input type="email" id="regis_email" name="email" placeholder=" " required>
                    <label>Email</label>
                    <div class="icons"><x-mdi-email class="h-4 w-7"/></div>
                </div>

                <div class="input-box regis animation" style="--i:20; --j:3;">
                    <input type="password" id="regis_password" name="password" placeholder=" " required autocomplete="off">
                    <label>Password</label>
                    <span class="eye" id="toggleRegisPassword" style="cursor: pointer;">
                        <i class="fa fa-eye" id="regisEyeIcon"></i>
                    </span>
                </div>

                <div class="input-box regis animation" style="--i:21; --j:4;">
                    <input type="password" id="cpassword" name="cpassword" placeholder=" " required autocomplete="off">
                    <label>Confirm Password</label>
                    <span class="eye" id="toggleConfirmPassword" style="cursor: pointer;">
                        <i class="fa fa-eye" id="confirmEyeIcon"></i>
                    </span>
                </div>

                <button type="submit" class="button animation" style="--i:22; --j:5;">Register</button>
                <div class="loginregis-link animation" style="--i:23; --j:6;">
                    <p>Already have an account? <a href="#" class="login-link">Login Here</a></p>
                </div>
            </form>
        </div>

        <div class="info-text regis">
            <h2 class="animation" style="--i:17; --j:0;">Welcome to Socyty!</h2>
            <p class="animation" style="--i:18; --j:1;">Register Your Account Here!</p>
        </div>
    </div>
</body>
</html>
