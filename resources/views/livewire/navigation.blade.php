<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-info"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-danger"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">

        <li class="nav-item {{ Request::route()->named('visitors.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('visitors.index') ? 'active' : '' }}"
                href="{{ route('visitors.index') }}" wire:navigate>
                <i class="fas fa-users text-success"></i> Visitantes
            </a>
        </li>

         <li class="nav-item {{ Request::route()->named('hotels.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('hotels.index') ? 'active' : '' }}"
                href="{{ route('hotels.index') }}" wire:navigate>
                <i class="fas fa-hotel text-warning"></i> Hoteles
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('guides.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('guides.index') ? 'active' : '' }}"
                href="{{ route('guides.index') }}" wire:navigate>
                <i class="fas fa-compass text-info"></i> Guías
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('tours.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('tours.index') ? 'active' : '' }}"
                href="{{ route('tours.index') }}" wire:navigate>
                <i class="fas fa-route text-primary"></i> Recorridos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('tours_categories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('tours_categories.index') ? 'active' : '' }}"
                href="{{ route('tours_categories.index') }}" wire:navigate>
                <i class="fas fa-tags text-secondary"></i> Categorías de Recorridos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('places.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('places.index') ? 'active' : '' }}"
                href="{{ route('places.index') }}" wire:navigate>
                <i class="fas fa-map-marker-alt text-danger"></i> Lugares
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('reservations.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('reservations.index') ? 'active' : '' }}"
                href="{{ route('reservations.index') }}" wire:navigate>
                <i class="fas fa-calendar-check text-success"></i> Reservaciones
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('historial_details.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('historial_details.index') ? 'active' : '' }}"
                href="{{ route('historial_details.index') }}" wire:navigate>
                <i class="fas fa-history text-info"></i> Historial de Reservaciones
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('admins.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('admins.index') ? 'active' : '' }}"
                href="{{ route('admins.index') }}" wire:navigate>
                <i class="fas fa-user-shield text-warning"></i> Administradores
            </a>
        </li>
        <li class="nav-item {{ Request::route()->named('catalogs.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('catalogs.index') ? 'active' : '' }}"
                href="{{ route('catalogs.index') }}" wire:navigate>
                <i class="fas fa-book text-primary"></i> Catálogos
            </a>
        </li>
    </ul>
</div>
