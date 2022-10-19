<nav x-data="{ open: false }" class="border-b">
    <!-- Primary Navigation Menu -->    
    <div class="row px-4 sm:px-6 lg:px-8 fixed-top">
        <div class="col-md-3 flex">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="logo">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
        </div>
        <div class="col-md-6 flex">
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mx-auto justify-between">
                    <x-nav-link :href="route('screener')" :active="request()->routeIs('screener')">
                        {{ __('Screener') }}
                    </x-nav-link>
                    <x-nav-link :href="route('gurutracker')" :active="request()->routeIs('gurutracker')">
                        {{ __('Guru Tracker') }}
                    </x-nav-link>
                    <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
                        {{ __('Articles') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('froum')" :active="request()->routeIs('froum')">
                        {{ __('Forum') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pricing')" :active="request()->routeIs('pricing')">
                        {{ __('Pricing') }}
                    </x-nav-link>
                </div>
        </div>
        <div class="col-md-3">
            <!-- Settings Dropdown -->
            
            <div class="sign_btn">
                @if (!Auth::guest())
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 login_btn">sign in</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-info signup_btn text-sm text-gray-700 dark:text-gray-500">sign out</a>
                    @endif
                @endif
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('screener')" :active="request()->routeIs('screener')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('gurutracker')" :active="request()->routeIs('gurutracker')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('froum')" :active="request()->routeIs('froum')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pricing')" :active="request()->routeIs('pricing')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
        @if (!Auth::guest())
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        @else

        @endif
        </div>
    </div>
</nav>
