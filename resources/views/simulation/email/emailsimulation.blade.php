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

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/simulation/simulation.css') }}">

    <script src="{{ asset('js/particlejs.js') }}" defer></script>
    <script src="{{ asset('js/simulation/simulation.js') }}" defer></script>

    @if($levelId == 1)
        <link rel="stylesheet" href="{{ asset('css/simulation/emailtemplate/level1.css') }}">
    @elseif($levelId == 2)
        <link rel="stylesheet" href="{{ asset('css/simulation/emailtemplate/level2.css') }}">
    @elseif($levelId == 3)
        <link rel="stylesheet" href="{{ asset('css/simulation/emailtemplate/level3.css') }}">
    @elseif($levelId == 4)
        <link rel="stylesheet" href="{{ asset('css/simulation/emailtemplate/level4.css') }}">
    @elseif($levelId == 5)
        <link rel="stylesheet" href="{{ asset('css/simulation/emailtemplate/level5.css') }}">
    @endif
</head>
<body id="main-content">
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="items">
                    <div class="gametitle">
                        <h1>{{ $emailLevelData->name }}</h1>
                        <p>{{ $emailLevelData->description }}</p>
                    </div>

                    <div id="explanation-card" class="explanation-card" style="display: none;">
                        <div class="card-body">
                            <div id="response-text"></div>
                        </div>
                    </div>
                </div>
            </div>

            @if($emailLevelData->questions->isNotEmpty())
                @php
                    $question = $emailLevelData->questions->first();
                    $responses = $question->responses;
                @endphp

                <form id="simulation-form">
                    @csrf
                    <input type="hidden" id="level_id" name="level_id" value="{{ $emailLevelData->id }}">
                    <input type="hidden" id="question_id" name="question_id" value="{{ $question->id }}">
                    <input type="hidden" id="choice" name="choice">

                    <div class="questionlayout">
                        @if($levelId == 1)
                            <x-simulation.emailtemplate.level1></x-simulation.emailtemplate.level1>
                        @elseif($levelId == 2)
                            <x-simulation.emailtemplate.level2></x-simulation.emailtemplate.level2>
                        @elseif($levelId == 3)
                            <x-simulation.emailtemplate.level3></x-simulation.emailtemplate.level3>
                        @elseif($levelId == 4)
                            <x-simulation.emailtemplate.level4></x-simulation.emailtemplate.level4>
                        @elseif($levelId == 5)
                            <x-simulation.emailtemplate.level5></x-simulation.emailtemplate.level5>
                        @endif
                    </div>

                    <div class="questioncontainer" id="questioncontainer">
                        <h2 id="question">{{ $question->question_text }}</h2>
                    </div>

                    <div class="choice-wrapper" id="choice-wrapper">
                        @foreach ($responses as $response)
                            <div class="choice-container">
                                <p class="choice-letter">{{ chr(65 + $loop->index) }}.</p>
                                <p class="choice-desc" data-response-type="{{ $response->response_type }}">
                                    {{ ucfirst($response->response_type) }} Email
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <div class="buttons" style="text-align: center">
                        <button type="button" id="submitbutton">Submit</button>
                    </div>
                </form>

                <div class="buttons" style="text-align: center">
                    <div id="nav-buttons" style="display: none;">
                        <button type="button" class="buttons2" onclick="window.location.href='{{ route('simulation.email.emailsimulation', ['level' => $levelId]) }}'">
                            Retry Level
                        </button>
                        <button type="button" class="buttons2" onclick="window.location.href='{{ route('simulation.email.dashboard') }}'">
                            Back to Levels
                        </button>
                        <button type="button" class="buttons2" onclick="window.location.href='{{ route('home') }}'">
                            Back to Home
                        </button>
                    </div>
                </div>

                @foreach ($responses as $responseIndex => $response)
                    @foreach (json_decode($response->reason, true)['items'] as $reasonIndex => $reason)
                        <div class="popup popup-{{ $response->response_type }}-{{ $reasonIndex + 1 }}"
                            id="popup{{ $response->response_type }}-{{ $reasonIndex + 1 }}" style="display: none;">
                            <div class="popup-content">
                                <p>{{ $reason }}</p>
                            </div>
                            <button class="next-button"
                                    onclick="showNextPopup('{{ $response->response_type }}-{{ $reasonIndex + 2 }}')">
                                {{ $reasonIndex + 1 === count(json_decode($response->reason, true)['items']) ? 'Close' : 'Next' }}
                            </button>
                        </div>
                    @endforeach
                @endforeach
            @else
                <p>No questions available for this level.</p>
            @endif
        </div>
    </div>

    <script type="application/json" id="responses-data">
        @json($responses)
    </script>
</body>
</html>
