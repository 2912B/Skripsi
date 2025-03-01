<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pre-Test Result</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- Vite -->
    @vite('resources/js/app.js')
    @vite('resources/js/assessment/resultassessment.js')
    @vite('resources/css/app.css')
    @vite('resources/css/multiplechoice.css')
    @vite('resources/js/particlejs.js')
    @vite('resources/js/error.js')
</head>
<body id="main-content">
    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <div class="endcontainer">
        <div id="endgame" class="justify-center flex-column">
            <div id="endhud">
                <div id="enditems">
                    <div class="endgametitle">
                        <h1>Pre-Test Assessment Result</h1>
                    </div>
                </div>
            </div>

            <div id="end">
                <h2 id="desc-score">Your Final Score:</h2>
                <h1 class="finalscore">{{ isset($score) ? $score : 'Score not found' }}</h1>

                <button type="button" id="gohome" onclick="window.location.href='{{ route('home') }}'">Go Home</button>
            </div>
        </div>
    </div>
</body>
</html>
