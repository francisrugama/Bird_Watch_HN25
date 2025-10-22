@extends('layouts.panel')
@section('title', 'Hotel / Ver Detalle')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0"><i class="fas fa-hotel"></i> Detalles del Hotel</h3>
                <a href="{{ route('hotels.index') }}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
            <div class="card-body">
                <h5 class="text-muted mb-4">Información general</h5>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong><i class="fas fa-building"></i> Nombre:</strong>
                        <p>{{ $hotels->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong><i class="fas fa-door-open"></i> Tipo de habitación:</strong>
                        <p>{{ $hotels->type_habitation }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <strong><i class="fas fa-align-left"></i> Descripción:</strong>
                        <p>{{ $hotels->descriptions }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8">
                        <strong><i class="fas fa-map-marker-alt"></i> Dirección:</strong>
                        <p>{{ $hotels->address }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong><i class="fas fa-phone"></i> Teléfono:</strong>
                        <p>{{ $hotels->telephone }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong><i class="fas fa-dollar-sign"></i> Precio por noche:</strong>
                        <p>${{ number_format($hotels->price_night, 2) }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong><i class="fas fa-user"></i> Responsable:</strong>
                        <p>{{ $hotels->responsible }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong><i class="fas fa-star"></i> Calificación:</strong>
                        <p>
                            @php
                                $stars = round($hotels->qualification);
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $stars)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                        </p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <strong><i class="fas fa-info-circle"></i> Estado:</strong><br>
                        @if(strtolower($hotels->status) == 'activo')
                            <span class="badge badge-success px-3 py-2">Activo</span>
                        @else
                            <span class="badge badge-danger px-3 py-2">{{ ucfirst($hotels->status) }}</span>
                        @endif
                    </div>
                </div>

            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('hotels.edit', $hotels->id) }}" class="btn btn-info">
                    <i class="fas fa-edit"></i> Editar
                </a>

                <form action="{{ route('hotels.destroy', $hotels->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este hotel? Esta acción no se puede deshacer.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
