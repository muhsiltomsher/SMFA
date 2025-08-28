@props([
    'image' => '/images/logo.png',
])

<section
    id="jks-hero-section"
    class="relative h-auto xl:h-screen flex flex-col items-center justify-center text-center bg-cover bg-center"
    style="background-image: url('/images/hero-bg.png'); opacity: 0;"
>
    <!-- Optional dark overlay -->
    <!-- <div class="absolute inset-0 bg-black bg-opacity-60"></div> -->

    <div class="relative z-10 flex flex-col items-center justify-center w-full px-4 h-full mt-24 xl:mt-0 pb-10 md:pb-10 xl:pb-0">
        <img
            id="jks-logo"
            src="{{ $image }}"
            alt="Logo"
            loading="lazy"
            class="mx-auto my-10 w-[560px] md:w-[760px] opacity-0"
            decoding="async"
            fetchpriority="low"
        />
        <p
            id="jks-hero-text"
            class="manrope-400 text-white text-base md:text-xl font-thin max-w-7xl mx-auto px-8 md:px-15 lg:px-28 xl:px-32 !leading-[34px] opacity-0 text-justify"
        >
            {{ $slot }}
        </p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const section = document.getElementById('jks-hero-section');
        const logo = document.getElementById('jks-logo');
        const text = document.getElementById('jks-hero-text');

        if (section && logo && text) {
            const tl = gsap.timeline({ defaults: { ease: "power2.out" } });

            // Fade in entire section (no position shift to avoid whitespace)
            tl.to(section, {
                duration: 1,
                opacity: 1,
            })

            // Animate logo fade + subtle slide up
            .to(logo, {
                opacity: 1,
                y: -20,
                duration: 1,
            }, "-=0.7")

            // Animate text fade + slight delay after logo
            .to(text, {
                opacity: 1,
                y: -10,
                duration: 1,
            }, "-=0.5");
        }
    });
</script>
