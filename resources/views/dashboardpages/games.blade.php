<x-navbar.navbarlayout>
        <h2 class="main-title">Games</h2>
        <p class="main-description">
            Level up your cyber security skills!
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/games/trivia" :active="request()->is('/games/trivia')">
                    <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Trivia</h5>
                        <p class="card-text">Answer cybersecurity questions and choose the correct answer</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/games/trueorfalse" :active="request()->is('/games/trueorfalse')">
                    <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">True or False</h5>
                        <p class="card-text">Decide if a cybersecurity statement is true or false</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/games/bestscenario" :active="request()->is('/games/bestscenario')">
                    <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Best Scenario</h5>
                        <p class="card-text">Choose the best response to a cybersecurity scenario</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
