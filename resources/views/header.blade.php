<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ url('/') }}">
        <i class="bi bi-speedometer2"></i> MyApp
    </a>

    <div class="d-flex align-items-center">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light btn-sm" type="submit">Logout</button>
            </form>
        @else
            <a href="/login" class="btn btn-outline-light btn-sm">Login</a>
        @endauth
    </div>
</nav>
