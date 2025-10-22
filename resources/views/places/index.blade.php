@extends('layouts.panel')
@section('title', 'Lugar/Listar')

@section('content')
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3>Lugares</h3>
            <a href="{{ route('places.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nuevo Lugar
            </a>
        </div>
    </div>

    <div class="row">
        @foreach ($places as $place)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $place->name }}</h5>
                        <p><strong>Dirección:</strong> {{ $place->address }}</p>
                        <p><strong>Horario:</strong> {{ $place->availability_schedule }}</p>
                        <p><strong>Tipo de reserva:</strong> {{ $place->type_reserve }}</p>
                        <p><strong>Descripción:</strong> {{ Str::limit($place->description, 100) }}</p>
                        <p><strong>Recorrido:</strong> {{ $place->tours->name ?? 'N/A' }}</p>
                        <p><strong>Hotel:</strong> {{ $place->hotels->name ?? 'N/A' }}</p>
                        <p class="text-muted"><small>Creado el: {{ $place->created_at->format('d-m-Y') }}</small></p>

                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('places.show', $place->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Mostrar
                            </a>
                            <a href="{{ route('places.edit', $place->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('places.destroy', $place->id) }}" method="POST" 
                                  onsubmit="return confirm('¿Estás seguro que deseas eliminar este lugar? ¡Esta acción no se puede deshacer!');"
                                  style="display:inline-block;">
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
        {{ $places->links() }}
    </div>
@endsection
