@extends('layouts.panel')
@section('title', 'Recorrido / Ver')

@section('content')
    <div class="container py-4">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center bg-white border-0">
                <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Tour</h3>
                <a href="{{ route('tours.index') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-list"></i> Volver
                </a>
            </div>

            <div class="card-body">
                <h5 class="text-muted mb-4">Información del Recorrido</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-tag"></i> Nombre del Recorrido:</strong>
                        <p>{{ $tours->name }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-clock"></i> Duración:</strong>
                        <p>{{ $tours->duration }}</p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <strong><i class="fa fa-align-left"></i> Descripción:</strong>
                        <p>{{ $tours->description }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-running"></i> Tipo de actividad:</strong>
                        <p>{{ $tours->type_activity }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-map-marker-alt"></i> Ubicación:</strong>
                        <p>{{ $tours->location }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-bus"></i> Tipo de transporte:</strong>
                        <p>{{ $tours->type_transport }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-language"></i> Idioma del tour:</strong>
                        <p>{{ $tours->tour_language }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-users"></i> Capacidad máxima:</strong>
                        <p>{{ $tours->max_capacity }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-calendar-check"></i> Reservas:</strong>
                        <p>{{ $tours->reservations->status ?? 'N/A' }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-user-tie"></i> Guía:</strong>
                        <p>{{ $tours->guides->name ?? 'N/A' }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-list"></i> Categoría:</strong>
                        <p>{{ $tours->tours_categories->name ?? 'N/A' }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong><i class="fa fa-user-shield"></i> Administrador:</strong>
                        <p>{{ $tours->admins->name ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
