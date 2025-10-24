@extends('layouts.panel')
@section('title', 'Categorías de Recorrido')

@section('content')
    <div class="row mb-3">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Categorías de Tours</h3>
                <a href="{{ route('tours_categories.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nueva Categoría de recorrido
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($tours_categories as $tour_categorie)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $tour_categorie->name }}</h5>
                        <p class="card-text">{{ Str::limit($tour_categorie->description, 120) }}</p>
                        
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('tours_categories.show', $tour_categorie->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Mostrar
                            </a>
                            <a href="{{ route('tours_categories.edit', $tour_categorie->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('tours_categories.destroy', $tour_categorie->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar esta Categoría? Esta acción no se puede deshacer.');" style="display: inline-block;">
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
        {{ $tours_categories->links() }}
    </div>
@endsection
