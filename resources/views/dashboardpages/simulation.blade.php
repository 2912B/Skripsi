<x-navbar.navbarlayout>
        <h2 class="main-title">Simulation</h2>
        <p class="main-description">
            Experience real world cyber security scenarios!
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/email" :active="request()->is('/simulation/email')">
                    <div class="feature-icon">📦</div>
                    <div class="card-body">
                        <h5 class="card-title">Email Phishing</h5>
                        <p class="card-text">Review an email to decide if it's a phishing email or a legitimate email</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/message" :active="request()->is('/simulation/message')">
                    <div class="feature-icon">📦</div>
                    <div class="card-body">
                        <h5 class="card-title">SMS Phishing</h5>
                        <p class="card-text">Review a SMS message to decide if it's a phishing message or a legitimate message</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/pass-sec" :active="request()->is('/simulation/pass-sec')">
                    <div class="feature-icon">📦</div>
                    <div class="card-body">
                        <h5 class="card-title">Password Security</h5>
                        <p class="card-text">Create a secure password by following best practices!</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
