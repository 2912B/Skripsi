<x-gameslayout.result>
    <div class="endcontainer">
        <div id="endgame" class="justify-center flex-column">
            <div id="endhud">
                <div id="enditems">
                    <div class="endgametitle">
                        <h1>Best Scenario Result</h1>
                        <p>{{ ucwords(str_replace('-', ' ', $category->name))}}</p>
                    </div>
                </div>
            </div>

            <div id="end">
                <h2 id="desc-score">Description</h2>
                <h1 id="finalscore">0</h1>
                <form>
                    @csrf
                    <button type="button" id="tryagain" onclick="window.location.href='/games/bestscenario'" >Play Again</button>
                    <button type="button" id="gohome" onclick="window.location.href='{{ route('home') }}'">Go Home</button>
                </form>
            </div>
        </div>
    </div>
</x-gameslayout.result>
