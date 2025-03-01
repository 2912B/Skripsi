<x-simulation.dashboard>
    <h2 class="main-title">Email Phishing Simulation</h2>

    @if(session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Email Phishing Simulation!<br><br>

                In this simulation, you’ll analyze realistic email examples to decide if they are legitimate or phishing attempts. Each email will help you practice spotting common phishing tactics that target employees. By participating, you’ll build confidence in identifying phishing emails and protecting your organization from threats.<br><br>

                First, select your level: 1, 2, and so on.....
            </p>
        </div>
    </div>

    <div class="row-sim">
        @foreach (range(1, 5) as $level)
            <div class="col-md-4 m-2">
                <x-dashboardlink.link2
                    href="{{ url('/simulation/email/' . $level) }}"
                    :active="request()->is('/simulation/email/' . $level)"
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
