<x-gameslayout.dashboard>
    <h2 class="main-title">Trivia Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Trivia Game!<br><br>

                In this game, you’ll answer questions about key cybersecurity topics relevant to the workplace. Each question will help you understand how to stay secure on the job. By playing, you’ll strengthen your cybersecurity awareness and gain practical tips for protecting both your data and your organization’s.<br><br>

                Choose a category to begin: Cyber Threats, Security Best Practices, or Data Privacy.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/cyber-threat" :active="request()->is('/games/trivia/cyber-threat')">
                <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Cyber Threat</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/security-best-practice" :active="request()->is('/games/trivia/security-best-practice')">
                <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Security Best Practice</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/data-privacy" :active="request()->is('/games/trivia/data-privacy')">
                <div class="feature-icon" style="display: flex; justify-content: center; align-items: center;"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Data Privacy</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
