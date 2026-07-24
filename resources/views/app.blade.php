<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dokumen @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        @section('header')
        Ini adalah master header.
        @show
    </header>

    <div class="d-flex">
        <aside>
            @section('sidebar')
            Ini adalah master sidebar.
            @show
        </aside>

        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer>
        @section('footer')
        Ini adalah master footer.
        @show
    </footer>
</body>
</html>