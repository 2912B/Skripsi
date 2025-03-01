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
    @vite('resources/js/simulation/simulation.js')
    @vite('resources/css/simulation/simulation.css')

    @if($levelId == 1)
        @vite('resources/css/simulation/smstemplate/level1.css')
        @vite('resources/js/sms/level1.js')
    @elseif($levelId == 2)
        @vite('resources/css/simulation/smstemplate/level2.css')
        @vite('resources/js/sms/level2.js')
    @elseif($levelId == 3)
        @vite('resources/css/simulation/smstemplate/level3.css')
        @vite('resources/js/sms/level3.js')
    @elseif($levelId == 4)
        @vite('resources/css/simulation/smstemplate/level4.css')
        @vite('resources/js/sms/level4.js')
    @elseif($levelId == 5)
        @vite('resources/css/simulation/smstemplate/level5.css')
        @vite('resources/js/sms/level5.js')
    @endif
</head>
<body id="main-content">
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="items">
                    <div class="gametitle">
                        <h1>{{ $smsLevelData->name }}</h1>
                        <p>{{ $smsLevelData->description }}</p>
                    </div>

                    <div id="explanation-card" class="explanation-card" style="display: none;">
                        <div class="card-body">
                            <div id="response-text"></div>
                        </div>
                    </div>
                </div>
            </div>

            @if($smsLevelData->questions->isNotEmpty())
                @php
                    $question = $smsLevelData->questions->first();
                    $responses = $question->responses;
                @endphp

                <form id="simulation-form">
                    @csrf
                    <input type="hidden" id="level_id" name="level_id" value="{{ $smsLevelData->id }}">
                    <input type="hidden" id="question_id" name="question_id" value="{{ $question->id }}">
                    <input type="hidden" id="choice" name="choice">

                    <div class="questionlayout">
                        @if($levelId == 1)
                            <x-simulation.smstemplate.level1></x-simulation.smstemplate.level1>
                        @elseif($levelId == 2)
                            <x-simulation.smstemplate.level2></x-simulation.smstemplate.level2>
                        @elseif($levelId == 3)
                            <x-simulation.smstemplate.level3></x-simulation.smstemplate.level3>
                        @elseif($levelId == 4)
                            <x-simulation.smstemplate.level4></x-simulation.smstemplate.level4>
                        @elseif($levelId == 5)
                            <x-simulation.smstemplate.level5></x-simulation.smstemplate.level5>
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
                                    {{ ucfirst($response->response_type) }} SMS
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
                        <button type="button" class="buttons2" onclick="window.location.href='{{ route('simulation.sms.smssimulation', ['level' => $levelId]) }}'">
                            Retry Level
                        </button>
                        <button type="button" class="buttons2" onclick="window.location.href='{{ route('simulation.sms.dashboard') }}'">
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
