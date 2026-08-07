<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'King Of Pasta')</title>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/screen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fullPage.css') }}" rel="stylesheet">

    {{-- Layout flex custom, karena template ini tidak pakai Bootstrap --}}
    <style>
        .wrapper { display: flex; align-items: stretch; min-height: 100vh; }
        .main-content { flex: 1; display: flex; flex-direction: column; min-width: 0; }
        .main-content .content { flex: 1; }
    </style>
    @stack('styles')
</head>
<body>

    <div class="wrapper">

        @include('partials.sidebar')

        <div class="main-content">

            @include('partials.header')

            <main class="content">
                @yield('content')
            </main>

            {{-- @include('partials.footer') --}}

        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.glide.js') }}"></script>
    <script src="{{ asset('assets/js/MyJQ.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/stickUp.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#navigations').localScroll({ duration: 800 });
        });
        new WOW().init();
    </script>

    @stack('scripts')
</body>
</html>