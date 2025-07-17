<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 220px; min-height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : 'link-dark' }}">
                <i class="bi bi-house-door"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('dosens.index') }}" class="nav-link {{ request()->routeIs('dosens.*') ? 'active' : 'link-dark' }}">
                <i class="bi bi-person-badge"></i> Dosen
            </a>
        </li>
        <li>
            <a href="{{ route('staff.index') }}" class="nav-link {{ request()->routeIs('staff.*') ? 'active' : 'link-dark' }}">
                <i class="bi bi-people"></i> Staff
            </a>
        </li>
    </ul>
</div> 