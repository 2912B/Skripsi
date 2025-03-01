<x-simulation.dashboard>
    <h2 class="main-title">SMS Phishing Simulation</h2>

    @if(session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the SMS Phishing Simulation!<br><br>

                In this simulation, you’ll analyze realistic SMS messages examples to determine if they are legitimate or phishing attempts. Each message will help you practice spotting common phishing tactics that target employees through text messaging. By participating, you’ll build confidence in identifying phishing texts and protecting your organization from mobile threats.<br><br>

                Select one of these levels!
            </p>
        </div>
    </div>

    <div class="row-sim">
        @foreach (range(1, 5) as $level)
            <div class="col-md-4 m-2">
                <x-dashboardlink.link2
                    href="{{ url('/simulation/message/' . $level) }}"
                    :active="request()->is('/simulation/message/' . $level)"
                >
                    <div class="feature-icon-sim">📦</div>
                    <div class="card-body-sim">
                        <h5 class="card-title-sim">Level {{ $level }}</h5>
                    </div>
                </x-dashboardlink.link2>
            </div>
        @endforeach
    </div>
</x-simulation.dashboard>
