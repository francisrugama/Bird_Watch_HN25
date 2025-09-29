<ul class="navbar-nav">
    <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
            href="{{ route('dashboard') }}" wire:navigate>
            <i class="fa-solid fa-house text-primary"></i> Dashboard
        </a>
    </li>
</ul>

<hr class="my-3">

<h6 class="navbar-heading text-muted">Otras Acciones</h6>
<ul class="navbar-nav mb-md-3">
    <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
            href="{{ route('profile.index') }}" wire:navigate>
            <i class="fa-solid fa-id-card text-info"></i> Perfil
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-right-from-bracket text-danger"></i> Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>

<hr class="my-3">

<h6 class="navbar-heading text-muted">Ejemplos</h6>
<ul class="navbar-nav mb-md-3">
    <li class="nav-item {{ Request::route()->named('visitors.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('visitors.index') ? 'active' : '' }}"
            href="{{ route('visitors.index') }}" wire:navigate>
            <i class="fa-solid fa-users text-warning"></i> Visitantes
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('hotels.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('hotels.index') ? 'active' : '' }}"
            href="{{ route('hotels.index') }}" wire:navigate>
            <i class="fa-solid fa-hotel text-success"></i> Hoteles
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('guides.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('guides.index') ? 'active' : '' }}"
            href="{{ route('guides.index') }}" wire:navigate>
            <i class="fa-solid fa-map text-primary"></i> Guías
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('tours.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('tours.index') ? 'active' : '' }}"
            href="{{ route('tours.index') }}" wire:navigate>
            <i class="fa-solid fa-route text-danger"></i> Recorridos
        </a>
    </li>

<<<<<<< HEAD
            <li class="nav-item {{ Request::route()->named('tours_categories.index') ? 'active' : '' }}">
                <a class="nav-link {{ Request::route()->named('tours_categories.index') ? 'active' : '' }}"
                    href="{{ route('tours_categories.index') }}" wire:navigate>
                    <i class="fas fa-dove text-orange"></i> Categorias de Recorridos
                </a>
            </li>
=======
    <li class="nav-item {{ Request::route()->named('tour_categories.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('tour_categories.index') ? 'active' : '' }}"
            href="{{ route('tour_categories.index') }}" wire:navigate>
            <i class="fa-solid fa-tags text-info"></i> Categorías de Recorridos
        </a>
    </li>
>>>>>>> f4faf1e (feat:i fixed somo views)

    <li class="nav-item {{ Request::route()->named('places.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('places.index') ? 'active' : '' }}"
            href="{{ route('places.index') }}" wire:navigate>
            <i class="fa-solid fa-location-dot text-success"></i> Lugares
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('reservations.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('reservations.index') ? 'active' : '' }}"
            href="{{ route('reservations.index') }}" wire:navigate>
            <i class="fa-solid fa-calendar-check text-primary"></i> Reservaciones
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('historial_details.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('historial_details.index') ? 'active' : '' }}"
            href="{{ route('historial_details.index') }}" wire:navigate>
            <i class="fa-solid fa-clock-rotate-left text-warning"></i> Historial de Reservaciones
        </a>
    </li>

    <li class="nav-item {{ Request::route()->named('admins.index') ? 'active' : '' }}">
        <a class="nav-link {{ Request::route()->named('admins.index') ? 'active' : '' }}"
            href="{{ route('admins.index') }}" wire:navigate>
            <i class="fa-solid fa-user-shield text-danger"></i> Administradores
        </a>
    </li>
</ul>
