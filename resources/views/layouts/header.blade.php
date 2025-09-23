<header class="absolute lg:top-8 left-0 w-full z-50">
    <nav class="w-full bg-black bg-opacity-20 lg:bg-transparent font-serif" x-data="{ open: false }">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-center">

                <!-- Mobile menu button -->
                <div class="absolute left-4 lg:hidden">
                    <button
                        @click="open = !open"
                        :aria-expanded="open"
                        type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-label="Open main menu"
                    >
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex gap-10 xl:gap-16 items-center text-lg tracking-wide">
                    @foreach([
                        ['about', 'ABOUT US'],
                        ['core-functions', 'CORE FUNCTIONS'],
                        ['corporate-governance', 'CORPORATE GOVERNANCE'],
                        ['philanthropy', 'PHILANTHROPY'],
                        ['contact', 'CONTACT US'],
                    ] as [$route, $label])
                        <li>
                            <a
                                href="{{ route($route) }}"
                                class="noto-serif-display-700 transition border-b-2 pb-6 {{ request()->routeIs($route) ? 'border-[#fff] text-[#f9f7f0]' : 'border-transparent text-[#f9f7f0] hover:border-[#E1C6A6]' }}"
                            >
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Mobile Menu (with Alpine.js) -->
        <div
            x-show="open"
            x-transition.origin.top
            @click.away="open = false"
            class="lg:hidden absolute w-full left-0 bg-black bg-opacity-95"
            style="backdrop-filter: blur(3px);"
        >
            <div class="flex flex-col space-y-2 py-6 px-6">
                @foreach([
                    ['about', 'ABOUT US'],
                    ['core-functions', 'CORE FUNCTIONS'],
                    ['corporate-governance', 'CORPORATE GOVERNANCE'],
                    ['philanthropy', 'PHILANTHROPY'],
                    ['contact', 'CONTACT US'],
                ] as [$route, $label])
                    <a
                        href="{{ route($route) }}"
                        class="noto-serif-display-700 text-lg font-serif tracking-wide py-2 {{ request()->routeIs($route) ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'border-b-2 border-transparent text-[#f9f7f0] hover:border-[#E1C6A6]' }}"
                        @click="open = false"
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>
</header>
