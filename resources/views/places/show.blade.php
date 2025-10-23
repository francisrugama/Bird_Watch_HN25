@extends('layouts.panel')
@section('title', 'Lugar/Mostrar')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-map-marker-alt"></i> Ver Lugar
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('places.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Lugar</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre
                                </label>
                                <p class="form-control-plaintext">{{ $places->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-map-marker-alt"></i> Dirección
                                </label>
                                <p class="form-control-plaintext">{{ $places->address }}</p>
                            </div>
                        </div>
                    </div>

 
                    @if($places->latitude && $places->longitude)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-globe"></i> Latitud
                                </label>
                                <p class="form-control-plaintext">{{ $places->latitude }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-globe"></i> Longitud
                                </label>
                                <p class="form-control-plaintext">{{ $places->longitude }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-map"></i> Ubicación en el Mapa
                                </label>
                                <div id="map" style="height: 400px; width: 100%; border: 1px solid #ccc; border-radius: 4px;"></div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-calendar"></i> Disponibilidad de horario
                                </label>
                                <p class="form-control-plaintext">{{ $places->availability_schedule }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-tag"></i> Tipo de reserva
                                </label>
                                <p class="form-control-plaintext">{{ $places->type_reserve }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-info-circle"></i> Descripción
                                </label>
                                <p class="form-control-plaintext">{{ $places->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-route"></i> Tour
                                </label>
                                <p class="form-control-plaintext">{{ $places->tours->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-hotel"></i> Hotel
                                </label>
                                <p class="form-control-plaintext">{{ $places->hotels->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">
                                    <i class="fas fa-calendar-alt"></i> Fecha de creación
                                </label>
                                <p class="form-control-plaintext">{{ $places->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @if($places->latitude && $places->longitude)
    @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([{{ $places->latitude }}, {{ $places->longitude }}], 15);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            L.marker([{{ $places->latitude }}, {{ $places->longitude }}])
                .addTo(map)
                .bindPopup('<strong>{{ $places->name }}</strong><br>{{ $places->address }}')
                .openPopup();
        });
    </script>
    @endpush
    @endif

@endsection