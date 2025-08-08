<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>

    <!-- Tailwind CSS compiled via Vite -->
    @vite('resources/css/app.css')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&display=swap" rel="stylesheet">


    <!-- Optional: Add smooth scrolling behavior (CSS way) -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Include site header -->
    @include('layouts.header')

    <!-- Main content -->
    <main class="mx-auto">
        @yield('content')
    </main>

    <!-- Include site footer -->
    @include('layouts.footer')

    <!-- Include compiled JS via Vite -->
    @vite('resources/js/app.js')

    <!-- Optional: Mobile menu toggle script -->
    <script>
        // Make sure both elements exist before attaching listener
        const toggleBtn = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        }
    </script>

</body>
</html>
