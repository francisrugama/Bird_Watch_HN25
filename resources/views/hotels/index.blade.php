@extends('layouts.panel')
@section('title', 'Hoteles')

@section('content')
<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h3>Hoteles</h3>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nuevo Hotel
        </a>
    </div>
</div>

<div class="row">
    @forelse ($hotels as $hotel)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $hotel->name }}</h5>
                    <p class="card-text text-truncate" title="{{ $hotel->descriptions }}">{{ Str::limit($hotel->descriptions, 100) }}</p>
                    <ul class="list-unstyled mb-3">
                        <li><strong>Tipo Habitación:</strong> {{ $hotel->type_habitation }}</li>
                        <li><strong>Dirección:</strong> {{ Str::limit($hotel->address, 50) }}</li>
                        <li>
                            <strong>Estado:</strong> 
                            @if(strtolower($hotel->status) == 'activo')
                                <span class="badge badge-success">Activo</span>
                            @else
                                <span class="badge badge-danger">{{ ucfirst($hotel->status) }}</span>
                            @endif
                        </li>
                        <li><strong>Precio por Noche:</strong> ${{ number_format($hotel->price_night, 2) }}</li>
                        <li><strong>Teléfono:</strong> {{ $hotel->telephone }}</li>
                        <li><strong>Responsable:</strong> {{ $hotel->responsible }}</li>
                        <li>
                            <strong>Calificación:</strong>
                            @php
                                $stars = round($hotel->qualification);
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $stars)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                        </li>
                    </ul>

                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-sm btn-primary" title="Mostrar">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-sm btn-info" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar este hotel? Esta acción no se puede deshacer.');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col">
            <p>No hay hoteles registrados.</p>
        </div>
    @endforelse
</div>

<div class="d-flex justify-content-center">
    {{ $hotels->links() }}
</div>
@endsection
