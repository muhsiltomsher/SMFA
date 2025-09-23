<section class="w-full bg-white text-center py-12 px-7 md:px-15 pt-8 sm:pt-20 scroll-view hidden">
    <h2 class="text-4xl font-serif font-normal text-[#473c38] mb-8 mt-5 mb:mt-10">
        Contact Us
    </h2>
    <p class="text-lg text-[#473c38] font-serif mb-8 mx-auto max-w-xl">
        For further information or to connect with the Private Office of H.H. Sheikh Mohammed bin Faisal bin Sultan Al Qassimi, please contact our headquarters at:
    </p>
    <div class="mb-4">
        <div class="font-bold text-xl text-[#473c38] tracking-wide mb-3">ADDRESS</div>
        <p class="text-lg text-[#473c38] font-serif mb-8 mx-auto max-w-xl">
            Villa 352/16C, Umm Suqeim<br>DM 130 Al Hamra St, Jumeirah 3<br>PO Box 926100
        </p>
    </div>
    <div class="mb-7">
        <div class="font-bold text-[#473c38] text-xl tracking-wide mb-3">PHONE</div>
        <a href="tel:+97142611126" class="text-[#473c38] underline hover:text-[#E1C6A6] font-semibold">
            +971 4 261 1126
        </a>
    </div>
    <div class="mb-4">
        <div class="font-bold tracking-wide mb-1 text-gray-900">EMAIL</div>
        <a href="mailto:info@thepytoffice.com" class="text-gray-800 underline hover:text-[#E1C6A6] font-semibold">
            info@thepytoffice.com
        </a>
    </div>
    <div class="mt-8 text-xs text-[#473c38] font-serif">
        Copyright © <span id="dynamic-year"></span>, The Private Office of SMFA. All Rights Reserved.
    </div>
</section>

<section class="w-full bg-white text-center py-6 px-7 md:px-15">
    <p class="font-serif font-normal text-[12px] xl:text-[14px]">
        Copyright © <span id="dynamic-year-footer"></span>. The Private Office of H.H. Sheikh Mohammed bin Faisal bin Sultan Al Qassimi. <br> All Rights Reserved.
    </p>
    <p class="font-serif font-normal text-[11px] xl:text-[16px] hidden" id="seo-designed-by">
        Designed by <a href="https://tomsher.com" class="underline hover:text-[#E1C6A6]">Tomsher</a>.
    </p>
</section>

<button
    id="scrollToTopBtn"
    class="fixed bottom-6 right-6 p-3 rounded-full bg-[#473c38] text-white shadow-lg opacity-0 pointer-events-none transition-opacity duration-300"
    aria-label="Scroll to top"
    title="Scroll to top"
>
    ↑
</button>


<script>
    // Set dynamic year
    const currentYear = new Date().getFullYear();
    document.getElementById('dynamic-year').textContent = currentYear;
    document.getElementById('dynamic-year-footer').textContent = currentYear;
    
    // Ensure SEO still picks "Designed by Tomsher" even when hidden
    document.getElementById('seo-designed-by').style.display = 'none';

    // Scroll To Top Button handling
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) { // Show button after scrolling 300px
        scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
        scrollToTopBtn.classList.add('opacity-100');
    } else {
        scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
        scrollToTopBtn.classList.remove('opacity-100');
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
});

</script>
