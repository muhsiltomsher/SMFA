<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Link to the Vite-compiled CSS file (TailwindCSS) -->
    @vite('resources/css/app.css') <!-- This assumes you're using Vite to build your CSS -->
</head>
<body class="bg-gray-100">

    <!-- Include Header -->
    @include('layouts.header')

    <main class="mx-auto">
        @yield('content') <!-- Dynamic content injected from each page -->
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- Include JavaScript built by Vite (for other client-side logic) -->
    @vite('resources/js/app.js') <!-- This assumes you're using Vite to build your JS -->


    <script>
    const toggleBtn = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    toggleBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</body>
</html>
