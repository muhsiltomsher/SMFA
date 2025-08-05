<!-- resources/views/layouts/header.blade.php -->
<header class="absolute top-0 left-0 w-full z-50 bg-transparent py-6 px-10 flex items-center justify-between">
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
</header>
