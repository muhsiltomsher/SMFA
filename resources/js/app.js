// ---------------------------------------------
// 🧩 UI/Library Imports
// ---------------------------------------------

// Flowbite UI components
import 'flowbite';

// Swiper & modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// Bootstrap (or your own bootstrap file)
import './bootstrap';

// Flaticon UIcons
import '@flaticon/flaticon-uicons/css/all/all.css';

// Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// GSAP with ScrollTrigger and ScrollSmoother
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import ScrollSmoother from 'gsap/ScrollSmoother';
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
window.gsap = gsap;

// ---------------------------------------------
// 🌊 GSAP Scroll Effects
// ---------------------------------------------

window.addEventListener('DOMContentLoaded', () => {
    // ✅ Get wrapper/content elements FIRST
    const wrapper = document.querySelector('#smooth-wrapper');
    const content = document.querySelector('#smooth-content');

    // ✅ Only create smoother if structure exists
    if (wrapper && content) {
        ScrollSmoother.create({
            wrapper: '#smooth-wrapper',
            content: '#smooth-content',
            smooth: 1,
            effects: true,
            smoothTouch: 0.1,
        });
    }

    // ✅ Animate width of image on scroll
    const section = document.querySelector('#since-year1');
    const image = section?.querySelector('.since-width-image1');
    const heading = section?.querySelector('#since-heading1');

    if (image) {
        gsap.fromTo(image,
            { width: '0%' },
            {
                width: '100%',
                ease: 'none',
                scrollTrigger: {
                    trigger: section,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            }
        );
    }

    if (heading) {
        gsap.from(heading, {
            opacity: 0,
            y: 40,
            duration: 1,
            stagger: 0.08,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: heading,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play reverse play reverse'
            }
        });
    }

    // ✅ Always refresh ScrollTrigger after dynamic layout changes
    ScrollTrigger.refresh();
});

window.addEventListener('load', () => {
    const loader = document.getElementById('site-loader');
    const counter = document.getElementById('loading-count');

    // Count from 0 to 100%
    let current = 0;
    const interval = setInterval(() => {
        current += 1;
        if (counter) counter.textContent = `${current}%`;
        if (current >= 100) {
            clearInterval(interval);

            // Fade out the loader
            loader.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => loader.remove(), 800);
        }
    }, 20); // 100 * 20ms = 2000ms = 2s (matches fill bar)
});
