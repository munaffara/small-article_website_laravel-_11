<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="Type something..." aria-label="Search">
    </form>


    <x-slot name="trigger">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <button
                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </button>
        @else
            <span class="inline-flex rounded-md">
                <button type="button"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                    {{ Auth::user()->name }}

                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </span>
        @endif
    </x-slot>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded">
                            <img class="avatar-img rounded-circle" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="bg-blue-500 text-black font-semibold py-2 px-4 rounded border-0">
                                {{ Auth::user()->name }}
                            </button>
                        </span>
                    @endif
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-dropdown-link href="{{ route('profile.show') }}" class="dropdown-item">
                    {{ __('Profile') }}
                </x-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-dropdown-link href="{{ route('api-tokens.index') }}" class="dropdown-item">
                        {{ __('API Tokens') }}
                    </x-dropdown-link>
                @endif

                <div class="border-t border-gray-200"></div>

                <!-- Authentication -->
                <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="dropdown-item">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </li>


    </ul>
</nav>
