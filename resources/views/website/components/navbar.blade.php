<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false"
    class="flex items-center sticky top-0 w-full justify-between bg-white/80 px-6 py-8 bg-blend-overlay shadow-2xl z-20"
    aria-label="penguin ui menu">
    <div class="basis-1/2">
        <ul class="hidden items-center gap-6 sm:flex justify-center">
            <li>
                <x-nav-link href="{{route('home')}}" :active="request()->routeIs('home')">
                    Inicio
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{route('view.staff')}}" :active="request()->routeIs('view.staff')">
                    Nuestro Staff
                </x-nav-link>
            </li>
            <x-nav-link href="{{route('view.pilot')}}" :active="request()->routeIs('view.pilot')">
                Pilotos
            </x-nav-link>
        </ul>
    </div>
    <!-- Brand Logo -->
    <div class="">
        <a href="{{route('home')}}">
            <img src="{{asset('assets/img/OA_LOGO_BG.png')}}" alt="brand logo" class="w-64 rounded" />
        </a>
    </div>
    <!-- Desktop Menu -->
    <div class="basis-1/2">
        <ul class="hidden items-center gap-4 sm:flex justify-center">

            @auth

            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-2 px-3 font-bold text-slate-700 underline-offset-2 hover:text-blue-700 focus:outline-none rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">{{Auth::user()->name}}
                    {{Auth::user()->surname[0]}}. | {{Auth::user()->rank}}
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{route('pilot.dashboard')}}"
                                class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('pilot.config')}}" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100"
                                @click.prevent="$root.submit();">
                                Log out
                            </a>
                        </form>
                    </div>
                </div>
            </li>
            @endauth

            @guest

            <!-- CTA Button -->
            <li><a href="{{route('login')}}"
                    class="rounded-xl bg-blue-700 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0">Sign
                    Up</a></li>
            @endguest
        </ul>
    </div>
    <!-- Mobile Menu Button -->
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen"
        :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button"
        class="flex text-slate-700 sm:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
        class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-slate-300 rounded-b-xl border-b border-slate-300 bg-slate-100 px-6 pb-6 pt-20 sm:hidden">
        <li class="py-4"><a href="#" class="w-full text-lg font-bold text-blue-700 focus:underline"
                aria-current="page">Products</a></li>
        <li class="py-4"><a href="#" class="w-full text-lg font-medium text-slate-700 focus:underline">Pricing</a></li>
        <li class="py-4"><a href="#" class="w-full text-lg font-medium text-slate-700 focus:underline">Blog</a></li>
        <!-- CTA Button -->
        <li class="mt-4 w-full border-none"><a href="#"
                class="rounded-xl bg-blue-700 px-4 py-2 block text-center font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0">Sign
                Up</a></li>
    </ul>
</nav>