@extends('layouts.panel')
@section('title', 'Tour')

@section('content')
    <div class="row mb-3">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Recorrido</h3>
                <a href="{{ route('tours.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nuevo Recorrido
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($tours as $tour)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $tour->name }}</h5>
                        <p class="card-text">{{ Str::limit($tour->description, 100) }}</p>
                        <ul class="list-unstyled mb-3">
                            <li><strong>Tipo de actividad:</strong> {{ $tour->type_activity }}</li>
                            <li><strong>Duración:</strong> {{ $tour->duration }}</li>
                            <li><strong>Localidad:</strong> {{ $tour->location }}</li>
                            <li><strong>Transporte:</strong> {{ $tour->type_transport }}</li>
                            <li><strong>Idioma:</strong> {{ $tour->tour_language }}</li>
                            <li><strong>Capacidad máxima:</strong> {{ $tour->max_capacity }}</li>
                            <li><strong>Reservación:</strong> {{ $tour->reservations->status ?? 'N/A' }}</li>
                            <li><strong>Guía:</strong> {{ $tour->guides->name ?? 'N/A' }}</li>
                            <li><strong>Categoría:</strong> {{ $tour->tours_categories->name ?? 'N/A' }}</li>
                            <li><strong>Administrador:</strong> {{ $tour->admins->name ?? 'N/A' }}</li>
                        </ul>
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Mostrar
                            </a>
                            <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar este Tour? Esta acción no se puede deshacer.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $tours->links() }}
    </div>
@endsection
