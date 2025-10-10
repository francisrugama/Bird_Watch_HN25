<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons (Font Awesome 6 + Nucleo) -->
    <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS Files -->
    <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">

    @livewireStyles
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand pt-0" href="#">
                <img src="{{ asset('img/brand/logos.png') }}" class="navbar-brand-img" alt="Logo">
            </a>

            <!-- User -->
            @include('includes.mobile_menu')

            <!-- Collapse -->
            <livewire:navigation />
        </div>
    </nav>

    @if (request()->routeIs('profile.index'))
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                        href="{{ route('profile.index') }}">Perfil de Usuario</a>
                    <livewire:menu />
                </div>
            </nav>

            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
                style="min-height: 600px; background-image: url('{{ auth()->user()->image() }}'); background-size: cover; background-position: center top;">
                <span class="mask bg-gradient-default opacity-8"></span>
                <livewire:profile-edit />
            </div>

            <!-- Page content -->
            <div class="container-fluid mt--7">
                @yield('content')
            </div>
        </div>
    @else
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                        href="{{ route('dashboard') }}">dashboard</a>
                    <livewire:menu />
                </div>
            </nav>

            <!-- Header -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                    <a href="{{ route('catalogs.index') }}" style="text-decoration: none; color: inherit;">

                @if (request()->routeIs('dashboard'))
                    <div class="container-fluid">
                        <div class="header-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title text-uppercase text-muted mb-0">Ir Catalogo</h5>
                                                    <span class="h2 font-weight-bold mb-0">Catalogo</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                                                        <i class="fa-solid fa-dove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="container-fluid mt--7">
                @yield('content')
            </div>
        </div>
    @endif

    <!-- Core -->
    <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Optional JS -->
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Argon JS -->
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.2') }}"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('components.alerts')
    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Choices('#exampleFormControlSelect2', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>
</body>
</html>
<style>
    .bg-gradient-primary {
        background: linear-gradient(87deg, #14532d 0, #14532d 100%) !important;
    }
</style>
<style>
    .bg-default {
        background-color: #14532d !important; /* Verde oscuro */
    }
</style>
<style>
    .bg-gradient-default {
        background: linear-gradient(87deg, #14532d 0, #14532d 100%) !important; /* Verde oscuro */
    }
</style>
