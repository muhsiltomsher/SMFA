<!-- resources/views/layouts/header.blade.php -->
<!-- <header class="absolute top-0 left-0 w-full z-50 bg-transparent py-6 px-10 flex items-center justify-between">
    <nav class="w-full flex justify-center">
        <ul class="flex space-x-16">
            <li>
                <a href="{{ route('about') }}" class="text-lg font-serif text-[#f9f7f0] tracking-wide border-b-2 border-[#E1C6A6] pb-1">ABOUT US</a>
            </li>
            <li>
                <a href="{{ route('core-functions') }}" class="text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1">CORE FUNCTIONS</a>
            </li>
            <li>
                <a href="{{ route('corporate-governance') }}" class="text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1">CORPORATE GOVERNANCE</a>
            </li>
            <li>
                <a href="{{ route('philanthropy') }}" class="text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1">PHILANTHROPY</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1">CONTACT US</a>
            </li>
        </ul>
    </nav>
</header> -->

<header class="absolute top-0 left-0 w-full z-50">
    <nav class="w-full bg-[#000000af] lg:bg-transparent">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-center">
        <!-- Mobile menu button -->
        <div class="absolute left-4 lg:hidden">
          <button id="menu-toggle" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-[#fff] hover:bg-transparent  hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex between1024-1157:gap-6 between1158-1220:gap-16 lg:gap-20 space-x-4 text-sm font-medium">
            <a href="{{ route('about') }}" class="text-lg font-serif tracking-wide pb-1 {{ request()->routeIs('about') ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'text-[#f9f7f0] hover:border-b-2 hover:border-[#E1C6A6]' }}">ABOUT US</a>

            <a href="{{ route('core-functions') }}" class="text-lg font-serif tracking-wide pb-1 {{ request()->routeIs('core-functions') ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'text-[#f9f7f0] hover:border-b-2 hover:border-[#E1C6A6]' }}">CORE FUNCTIONS</a>

            <a href="{{ route('corporate-governance') }}" class="text-lg font-serif tracking-wide  pb-1 {{ request()->routeIs('corporate-governance') ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'text-[#f9f7f0] hover:border-b-2 hover:border-[#E1C6A6]' }}">CORPORATE GOVERNANCE</a>

            <a href="{{ route('philanthropy') }}" class="text-lg font-serif tracking-wide pb-1 {{ request()->routeIs('philanthropy') ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'text-[#f9f7f0] hover:border-b-2 hover:border-[#E1C6A6]' }}">PHILANTHROPY</a>

            <a href="{{ route('contact') }}" class="text-lg font-serif tracking-wide hover:border-b-2 pb-1 {{ request()->routeIs('contact') ? 'border-b-2 border-[#E1C6A6] text-[#f9f7f0]' : 'text-[#f9f7f0] hover:border-b-2 hover:border-[#E1C6A6]' }}">CONTACT US</a>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden px-2 pb-3 pt-2 space-y-1">
      <a href="{{ route('about') }}" class="block text-lg font-serif text-[#f9f7f0] tracking-wide border-b-2 border-[#E1C6A6] pb-1 p-5">ABOUT US</a>

      <a href="{{ route('core-functions') }}" class="block text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1 p-5">CORE FUNCTIONS</a>

      <a href="{{ route('corporate-governance') }}" class="block text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1 p-5">CORPORATE GOVERNANCE</a>

      <a href="{{ route('philanthropy') }}" class="block text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1 p-5">PHILANTHROPY</a>

      <a href="{{ route('contact') }}" class="block text-lg font-serif text-[#f9f7f0] tracking-wide hover:border-b-2 hover:border-[#E1C6A6] pb-1 p-5">CONTACT US</a>
    </div>
  </nav>
</header>
