<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('main_assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('main_assets/css/bootstrap-lib/bootstrap.min.css') }}">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('main_assets/css/style.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('main_assets/css/responsive.css') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('main_assets/font-awesome-lib/icon/font-awesome.min.css') }}">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('main_assets/css/slick.min.css') }}">

    <!-- AOS (Animation On Scroll) CSS -->
    <link rel="stylesheet" href="{{ asset('main_assets/css/aos.css') }}">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia


    <button onclick="scrollToTop()" id="backToTopBtn"><i class="fa-solid fa-arrow-turn-up"></i></button>

    <script src="{{ asset('main_assets/js/javascript-lib/bootstrap.min.js') }}"></script>

    <script src="{{ asset('main_assets/js/jquery.js') }}"></script>
    <!-- slick slider js -->
    <script src="{{ asset('main_assets/js/slick.min.js') }}"></script>
    <!-- main javascript -->
    <script src="{{ asset('main_assets/js/custom.js') }}"></script>
    <!-- counter javascript file -->
    <script src="{{ asset('main_assets/js/waypoints.min.js') }}"></script>
    <!-- animation from javascript -->
    <script src="{{ asset('main_assets/js/aos.js') }}"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1500,
        });
    </script>


</body>

</html>
