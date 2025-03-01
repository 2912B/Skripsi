<x-navbar.navbarlayout>
    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <h2 class="main-title">Assessment</h2>
        <p class="main-description">
            Evaluate your knowledge and awareness!
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/assessment/pretest" :active="request()->is('/assessment/pretest')">
                    <div class="feature-icon"><i class="fas fa-check-square"></i></div>
                    <div class="card-body">
                        <h5 class="card-title">Pre-Test</h5>
                        <p class="card-text">A test before you start playing our games and simulations</p>
                        <p>Note: You can only take once</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/assessment/posttest" :active="request()->is('/assessment/posttest')">
                    <div class="feature-icon"><i class="fas fa-check-square"></i></div>
                    <div class="card-body">
                        <h5 class="card-title">Post-Test</h5>
                        <p class="card-text">A test after finish playing our games and simulations</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
