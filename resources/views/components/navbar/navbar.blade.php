<nav class="navbar" x-data="{ isOpen: false }" @click.away="isOpen = false">
    <div class="navbar-hud">
        <div class="navbar-items">
            <x-navbar.logo href="/" :active="request()->is('/')">Socyty</x-navbar.logo>

            <div class="navbarlink">
                <div class="navbarlinkpc">
                    <div class="links">
                        <x-dashboardlink.gameslink href="/games" :active="request()->is('games')"><i class="fas fa-gamepad"></i>     Games</x-dashboardlink.gameslink>
                        <x-dashboardlink.simulationlink href="/simulation" :active="request()->is('simulation')"><i class="fas fa-cube"></i>  Simulation</x-dashboardlink.simulationlink>
                        <x-navbar.navbar-link href="/assessment" :active="request()->is('assessment')"><i class="fas fa-clipboard-check"></i>   Assessment</x-navbar.navbar-link>
                        <x-navbar.navbar-link href="/submission" :active="request()->is('submission')"><i class="fas fa-upload"></i>    Submit</x-navbar.navbar-link>
                    </div>
                </div>
            </div>
            <div class="navbarlinkpc">
                <div class="profilelogo">
                    @auth
                    <div class="dropdowncontainer">
                        <div>
                            <button @click="isOpen = !isOpen" type="button" class="profilebutton" id="user-menu-button" aria-expanded="isOpen.toString()" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <i class="fas fa-user"></i>
                            </button>
                        </div>
                        <div x-show="isOpen"
                            x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="openprofilebutton" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="/profile" class="dropdownmenu" role="menuitem" tabindex="-1">Your Profile</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" role="menuitem" class="dropdownmenu" tabindex="-1">Sign out</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <x-navbar.navbar-link href="/loginregis">Login/Register</x-navbar.navbar-link>
                    @endauth
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button @click="isOpen = !isOpen" type="button" class="mobilemenu" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu, Dropdown Menu-->
    <div style="background: linear-gradient(rgb(220, 219, 219), rgb(200, 200, 200)) text-black-800">
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="dropmobilemenu">
                <x-dashboardlink.gameslink href="/games" :active="request()->is('games')">Games</x-dashboardlink.gameslink>
                <x-dashboardlink.simulationlink href="/simulation" :active="request()->is('simulation')">Simulation</x-dashboardlink.simulationlink>
                <x-navbar.navbar-link href="/assessment" :active="request()->is('assessment')"> Assessment</x-navbar.navbar-link>
                <x-navbar.navbar-link href="/submission" :active="request()->is('submission')">Submit</x-navbar.navbar-link>
            </div>
            <div class="mobilemenu2">
                @auth
                <div class="mobilemenu3">
                    <x-navbar.navbar-link href="/profile">Your Profile</x-navbar.navbar-link>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logoutbutton" role="menuitem" tabindex="-1">Sign out</button>
                    </form>
                </div>
                @else
                <div class="flex items-center px-5">
                    <x-navbar.navbar-link href="/loginregis">Login/Register</x-navbar.navbar-link>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
