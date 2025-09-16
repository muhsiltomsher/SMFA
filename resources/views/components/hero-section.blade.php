@props([
    'image' => '/images/logo.svg', // default logo image path
    'widthClass' => 'max-w-[1250px]', // renamed from 'width' for clarity
])

@php
    // Capture additional classes passed to the component via $attributes
    $passedClass = $attributes->get('class') ?? '';

    // Capture the slot content as raw HTML string
    ob_start();
@endphp

{{ $slot }}

@php
    $content = ob_get_clean();

    // Strip all tags EXCEPT <br> to keep line breaks
    $contentWithBr = strip_tags($content, '<br>');

    // Remove the words 'long-', 'invest', 'investments' case insensitive
    $filteredContent = preg_replace('/\b(?:long-|investments|invest)\b/i', '', $contentWithBr);

    // Normalize multiple whitespaces but keep <br> tags
    $placeholder = '___BR_PLACEHOLDER___';
    $filteredContent = str_replace(['<br>', '<br/>', '<br />'], $placeholder, $filteredContent);
    $filteredContent = preg_replace('/\s+/', ' ', $filteredContent);
    $filteredContent = str_replace($placeholder, '<br>', $filteredContent);
@endphp

<section
    id="jks-hero-section"
    {{ $attributes->except('class') }}
    class="relative h-auto xl:h-screen flex flex-col items-center justify-center text-center bg-cover bg-center"
    style="background-image: url('/images/hero-bg.png'); opacity: 0;"
>
    <div class="relative z-10 gap-0 space-x-0 space-y-0 flex flex-col items-center justify-center w-full px-4 h-full mt-24 xl:mt-0 pb-10 md:pb-10 xl:pb-0">
        <img
            id="jks-logo"
            src="{{ $image }}"
            alt="Logo"
            loading="lazy"
            class="mx-auto  w-[560px] md:w-[760px] opacity-0"
            decoding="async"
            fetchpriority="low"
        />
        <div class="w-full h-16"></div>
        <p
            id="jks-hero-text"
            class="manrope-400 max-h-full lg:max-h-52 text-white text-base md:text-xl font-thin mx-auto px-0 md:px-2 lg:px-4 xl:px-32 !leading-[34px] tracking-wide opacity-0 text-justify {{ $widthClass }} {{ $passedClass }}"
            style="word-break: break-word; hyphens: none; white-space: normal; text-align: center;"
        >
            {!! $filteredContent !!}
        </p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined') {
            console.error('GSAP library is not loaded.');
            return;
        }

        const section = document.getElementById('jks-hero-section');
        const logo = document.getElementById('jks-logo');
        const text = document.getElementById('jks-hero-text');

        if (section && logo && text) {
            const tl = gsap.timeline({ defaults: { ease: "power2.out" } });

            tl.to(section, { duration: 1, opacity: 1 })
              .to(logo, { opacity: 1, y: -0, duration: 1 }, "-=0.7")
              .to(text, { opacity: 1, y: -0, duration: 1 }, "-=0.5");
        } else {
            console.error('One or more required elements not found:', {section, logo, text});
        }
    });
</script>
