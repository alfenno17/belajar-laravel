<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <link rel="stylesheet" href="{{ asset('king-of-pasta/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('king-of-pasta/css/screen.css') }}">
    <link rel="stylesheet" href="{{ asset('king-of-pasta/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('king-of-pasta/css/jquery.fullPage.css') }}">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .wrapper {
            display: flex;
            flex: 1;
        }

        .sidebar {
            width: 220px;
            background-color: #212529;
            min-height: 100%;
        }

        .sidebar a {
            color: #ddd;
        }

        .sidebar a:hover,
        .sidebar a.active {
            color: #fff;
            background-color: #343a40;
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>

    @stack('styles')
</head>

<body>
    @include('partials.header')

    <div class="wrapper">
        @include('partials.sidebar')

        <main class="content">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>

</html>
