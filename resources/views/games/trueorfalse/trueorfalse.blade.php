<x-gameslayout.games>
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="items">
                    <div class="gametitle">
                        <h1>True or False</h1>
                        <p>{{ ucwords(str_replace('-', ' ', $category->name))}}</p>

                        <div class="powerups">
                            <button id="doubleScore" class="powerup-button">2x Score</button>
                            <button id="freezeTime" class="powerup-button">Freeze Time</button>
                            <button id="fiftyFifty" class="powerup-button">50/50</button>

                            <button id="muteButton" class="mute-icone">Mute</button>
                        </div>
                    </div>
                    <div class="items2">
                        <p id="progresstext" class="questiontext">Question</p>
                        <p id="scoretext" class="scoretext">Score: 0</p>
                    </div>
                    <div id="progressBar">
                        <div id="progbarfull"></div>
                    </div>
                </div>
            </div>

            <div class="questioncontainer">
                <h2 id="question">What is the answer of this question?</h2>
            </div>

            <div class="choice-wrapper">
                <div class="choice-container">
                    <p class="choice-letter">A. </p>
                    <p class="choice-desc" data-number="1">Choice 1</p>
                </div>

                <div class="choice-container">
                    <p class="choice-letter">B. </p>
                    <p class="choice-desc" data-number="2">Choice 2</p>
                </div>
            </div>

            <div class="reason" id="reason">
                What else
            </div>

            <!-- Buttons for navigation -->
            <div class="buttons" style="text-align: center">
                <button id="submitbutton">Submit</button>
                <button id="nextbutton" style="display: none;">Next Question</button>
                <button id="finishbutton" style="display: none;">Finish</button>
            </div>
        </div>
    </div>

    <!-- Passing Questions Data to JavaScript -->
    <script>
        const questions = @json($questions); // Passing questions from Laravel to JavaScript
        const resultUrl = "{{ route('trueorfalse.result', ['categoryName' => $category->name]) }}";
    </script>
</x-gameslayout.games>
