<x-navbar.navbarlayout>
        @if (session('error'))
            <script>
                window.errorMessage = `{{ session('error') }}`;
                window.errorTitle = 'Error';
            </script>
        @endif

        @if (session('success'))
            <script>
                window.successMessage = `{{ session('success') }}`;
                window.successTitle = 'Success';
            </script>
        @endif


        <h2 class="main-title">The All In One Security Awareness Platform</h2>
        <p class="main-description">
            Welcome to Socyty, your ultimate destination for enhancing cybersecurity awareness and skills. Socyty is designed to make learning about cybersecurity engaging and accessible for everyone, regardless of your background. Our platform offers a range of interactive features.
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/games" :active="request()->is('/games')">
                    <div class="feature-icon">🎮</div>
                    <div class="card-body">
                        <h5 class="card-title">Games</h5>
                        <p class="card-text">Level up your cybersecurity skills with interactive challenges that take you through real-world scenarios. Master the game by recognizing threats, making smart moves, and protecting your digital world like a pro!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation" :active="request()->is('/simulation')">
                    <div class="feature-icon">📦</div>
                    <div class="card-body">
                        <h5 class="card-title">Simulations</h5>
                        <p class="card-text">Boost your cybersecurity awareness with immersive simulations that put you in real-world scenarios. From spotting phishing attempts to managing security breaches, gain hands-on experience to protect your digital environment. Stay sharp, stay secure!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/assessment" :active="request()->is('/assessment')">
                    <div class="feature-icon">📝</div>
                    <div class="card-body">
                        <h5 class="card-title">Assessment</h5>
                        <p class="card-text">Test your cybersecurity awareness with interactive assessments that challenge your knowledge and reveal areas to improve. Sharpen your skills and stay ahead in protecting your digital world!</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
