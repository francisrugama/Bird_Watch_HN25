<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birdwatch - Observa y Reserva Tours de Aves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d3b1a;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar { background-color: #0a2c14; }
        .navbar-brand img { height: 40px; }
        .hero {
            padding: 100px 0;
            text-align: center;
            background-image: url('{{ asset('images/tour-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            background-color: rgba(13, 59, 26, 0.7);
        }
        .section { padding: 60px 0; }
        .btn-primary { background-color: #1db954; border-color: #1db954; }
        footer { background-color: #0a2c14; padding: 20px; text-align: center; color: #aaa; }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logos.png') }}" alt="Logo Birdwatch">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#recorridos">Recorridos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservas">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aves">Catálogo de Aves</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hoteles">Hoteles</a></li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-primary ms-3">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light ms-2">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4 fw-bold">Birdwatch: Tu portal de avistamiento de aves</h1>
            <p class="lead">Descubre, reserva y vive experiencias únicas observando aves en su hábitat natural.</p>
            <a href="#reservas" class="btn btn-primary btn-lg">¡Quiero reservar mi tour!</a>
        </div>
    </section>
    <!-- ¿Cómo funciona Birdwatch? -->
    <section class="section bg-light text-dark">
        <div class="container">
            <h2 class="mb-4 text-center">¿Cómo funciona Birdwatch?</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Reserva tu tour fácilmente</h5>
                            <p class="card-text">Crea una reserva en pocos pasos y asegura tu lugar en el tour que prefieras.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Explora tours por categoría</h5>
                            <p class="card-text">Filtra y consulta tours disponibles por tipo de experiencia y actividades incluidas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Descubre aves y hoteles</h5>
                            <p class="card-text">Conoce las especies de aves que podrás observar y los hoteles cercanos a cada tour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservas Naturales de Nicaragua -->
    <section class="section bg-success text-white">
        <div class="container">
            <h2 class="mb-4 text-center">Reservas Naturales de Nicaragua</h2>
            <p class="lead text-center">Descubre las reservas más protegidas de Nicaragua, hogar de aves preciosas y biodiversidad única. Birdwatch te conecta con experiencias responsables en áreas naturales donde la conservación es prioridad.</p>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                        <img src="{{ asset('images/indio-maiz.jpg') }}" class="card-img-top" alt="Reserva Indio Maíz">
                        <div class="card-body">
                            <h5 class="card-title">Reserva Indio Maíz</h5>
                            <p class="card-text">Una de las áreas protegidas más grandes de Centroamérica, famosa por su selva tropical y especies de aves como el tucán y la guacamaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                        <img src="{{ asset('images/bosawas.jpg') }}" class="card-img-top" alt="Reserva Bosawás">
                        <div class="card-body">
                            <h5 class="card-title">Reserva Bosawás</h5>
                            <p class="card-text">Patrimonio de la humanidad, refugio de aves preciosas como el quetzal y el águila arpía, y epicentro de biodiversidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                        <img src="{{ asset('images/chocoyero.jpg') }}" class="card-img-top" alt="Reserva El Chocoyero-El Brujo">
                        <div class="card-body">
                            <h5 class="card-title">Reserva El Chocoyero-El Brujo</h5>
                            <p class="card-text">Famosa por la protección del chocoyo y otras especies endémicas, ideal para el avistamiento y la fotografía de aves.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RECORRIDOS -->
    <section id="recorridos" class="section bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">Tipos de Tours y Actividades</h2>
            <p class="mb-4">Elige entre diferentes categorías de tours y conoce las actividades que podrás realizar en cada uno.</p>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card bg-secondary text-white">
                        <img src="{{ asset('images/montana.jpg') }}" class="card-img-top" alt="Montaña">
                        <div class="card-body">
                            <h5 class="card-title">Montañas</h5>
                            <p class="card-text">Rutas guiadas por montañas para observar aves y realizar senderismo.</p>
                            <ul class="list-unstyled">
                                <li>Avistamiento de aves</li>
                                <li>Senderismo</li>
                                <li>Fotografía de naturaleza</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-secondary text-white">
                        <img src="{{ asset('images/rio.jpg') }}" class="card-img-top" alt="Río">
                        <div class="card-body">
                            <h5 class="card-title">Ríos</h5>
                            <p class="card-text">Explora ríos y humedales, hábitats ideales para aves acuáticas y actividades de kayak.</p>
                            <ul class="list-unstyled">
                                <li>Avistamiento de aves</li>
                                <li>Kayak</li>
                                <li>Paseos en bote</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-secondary text-white">
                        <img src="{{ asset('images/selva.jpg') }}" class="card-img-top" alt="Selva">
                        <div class="card-body">
                            <h5 class="card-title">Selvas</h5>
                            <p class="card-text">Aventuras en selvas tropicales para avistar especies únicas y participar en talleres ecológicos.</p>
                            <ul class="list-unstyled">
                                <li>Avistamiento de aves</li>
                                <li>Talleres ecológicos</li>
                                <li>Exploración guiada</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RESERVAS -->
    <section id="reservas" class="section">
        <div class="container">
            <h2 class="mb-4 text-center">Reservas</h2>
            <p class="text-center">Fácil y rápido. Reserva tu próxima aventura con solo unos clics.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contactForm" action="{{ route('reservations.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CATÁLOGO DE AVES -->
    <section id="aves" class="section bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">Catálogo de Aves</h2>
            <p class="mb-4">Consulta las especies que puedes observar en nuestros tours. ¡Descubre aves únicas y aprende sobre su hábitat!</p>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('images/colibri.jpg') }}" class="rounded-circle mb-2" alt="Colibrí">
                    <p>Colibrí</p>
                </div>
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('images/colibricaluscan.jpg') }}" class="rounded-circle mb-2" alt="Colibrí Caluscan">
                    <p>Águila</p>
                </div>
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('images/guacamaya.jpg') }}" class="rounded-circle mb-2" alt="Guacamaya">
                    <p>Guacamaya</p>
                </div>
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('images/flamenco.jpg') }}" class="rounded-circle mb-2" alt="Flamenco">
                    <p>Flamenco</p>
                </div>
            </div>
        </div>
    </section>
    <!-- HOTELES -->
    <section id="hoteles" class="section">
        <div class="container text-center">
            <h2 class="mb-4">Hoteles</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-montana.jpg') }}" class="card-img-top" alt="Hotel Montaña">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Montaña</h5>
                            <p class="card-text">Confort y naturaleza cerca de las rutas de montaña.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-rio.jpg') }}" class="card-img-top" alt="Hotel Río">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Río</h5>
                            <p class="card-text">Relájate junto al río y disfruta descuentos exclusivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-selva.jpg') }}" class="card-img-top" alt="Hotel Selva">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Selva</h5>
                            <p class="card-text">Hospedaje ecológico en plena selva tropical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        Birdwatch, &copy; {{ date('Y') }} Turismo Natural. Todos los derechos reservados.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
