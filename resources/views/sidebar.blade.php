<nav class="sidebar p-3">
    <ul class="nav flex-column">
        <li class="nav-item mb-1">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{ url('/users') }}" class="nav-link {{ request()->is('users*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Users
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{ url('/settings') }}" class="nav-link {{ request()->is('settings*') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</nav>
