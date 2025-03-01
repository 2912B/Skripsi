<x-gameslayout.dashboard>
    <h2 class="main-title">True or False Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the True or False Game!<br><br>

                This game challenges you to decide if each cybersecurity statement is true or false. It's designed to help you identify real security risks and clear up common misconceptions. By playing, you’ll improve your ability to recognize threats and make informed choices, helping to keep your workplace secure.<br><br>

                Choose a category to get started: Password Security, Social Engineering, or Phishing.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/password-security" :active="request()->is('/games/trueorfalse/password-security')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Password Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/social-engineering" :active="request()->is('/games/trueorfalse/social-engineering')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Social Engineering</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/phishing" :active="request()->is('/games/trueorfalse/phishing')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Phishing</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
