<x-gameslayout.dashboard>
    <h2 class="main-title">Best Scenario Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Best Scenario Game!<br><br>

                In this game, you'll face realistic workplace scenarios and choose the safest responses. Each scenario will help you practice decision-making in situations you may encounter on the job. By playing, you'll gain practical skills for responding to security challenges, helping protect your organization's data and assets.<br><br>

                Choose a category to begin: Incident Response, Device Security, or Workplace Security.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/incident-response" :active="request()->is('/games/bestscenario/incident-response')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Incident Response</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/device-security" :active="request()->is('/games/bestscenario/device-security')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Device Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/workplace-security" :active="request()->is('/games/bestscenario/workplace-security')">
                <div class="feature-icon">🎮</div>
                <div class="card-body">
                    <h5 class="card-title">Workplace Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
