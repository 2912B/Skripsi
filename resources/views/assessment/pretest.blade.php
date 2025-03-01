<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assessment</title>
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
    @vite('resources/css/app.css')
    @vite('resources/css/multiplechoice.css')
    @vite('resources/js/error.js')
    @vite('resources/js/particlejs.js')
    @vite('resources/js/assessment/pretest.js')
</head>
<body id="main-content">
    <div class="container">
        @if (session('error'))
            <script>
                window.errorMessage = `{{ session('error') }}`;
                window.errorTitle = 'Error';
            </script>
        @endif

        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="items">
                    <div class="gametitle">
                        <h1>Pretest Assessment</h1>
                    </div>
                    <div class="items2">
                        <p id="progresstext" class="questiontext">Question</p>
                        <p id="scoretext" class="scoretext">Score: 0</p>
                    </div>
                </div>
            </div>

            <div class="questioncontainer">
                <h2 id="question">What is the answer to this question?</h2>
            </div>

            <div class="choice-wrapper">
                @if($type == "trivia")
                    <div class="choice-container">
                        <p class="choice-letter">A. </p>
                        <p class="choice-desc" data-number="1">Choice 1</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">B. </p>
                        <p class="choice-desc" data-number="2">Choice 2</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">C. </p>
                        <p class="choice-desc" data-number="3">Choice 3</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">D. </p>
                        <p class="choice-desc" data-number="4">Choice 4</p>
                    </div>
                @elseif($type == "true_or_false")
                    <div class="choice-container">
                        <p class="choice-letter">A. </p>
                        <p class="choice-desc" data-number="1">True</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">B. </p>
                        <p class="choice-desc" data-number="2">False</p>
                    </div>
                @elseif($type == "best_scenario")
                    <div class="choice-container">
                        <p class="choice-letter">A. </p>
                        <p class="choice-desc" data-number="1">Choice 1</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">B. </p>
                        <p class="choice-desc" data-number="2">Choice 2</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-letter">C. </p>
                        <p class="choice-desc" data-number="3">Choice 3</p>
                    </div>
                @endif
            </div>


            <div class="buttons">
                <button id="submitbutton">Submit</button>
                <button id="nextbutton" style="display: none;">Next</button>
                <form id="finish-form" action="{{ route('assessment.pretest.complete') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" id="finalScore" name="score">
                    <button type="submit" id="finishbutton">Finish</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const questions = @json($questions);
    </script>
</body>
</html>
