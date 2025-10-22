@extends('layouts.panel')

@section('title', 'Guías')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h3>Guías</h3>
        <a href="{{ route('guides.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nuevo Guía
        </a>
    </div>
</div>

<div class="row">
    @foreach($guides as $guide)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $guide->name }}</h5>
                    <p class="card-text mb-1"><strong>Email:</strong> {{ $guide->email }}</p>
                    <p class="card-text mb-1"><strong>Teléfono:</strong> {{ $guide->telephone }}</p>
                    <p class="card-text mb-1"><strong>Experiencia:</strong> {{ $guide->experience }}</p>
                    <p class="card-text mb-1"><strong>Lenguaje:</strong> {{ $guide->language }}</p>
                    <p class="card-text mb-1"><strong>Edad:</strong> {{ $guide->age }}</p>
                    <p class="card-text mb-3"><strong>Género:</strong> {{ $guide->gender }}</p>

                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('guides.show', $guide->id) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> Mostrar
                        </a>
                        <a href="{{ route('guides.edit', $guide->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('guides.destroy', $guide->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este guía? Esta acción no es reversible.');">
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
    {{ $guides->links() }}
</div>
@endsection
