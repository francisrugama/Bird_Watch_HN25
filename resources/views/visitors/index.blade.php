@extends('layouts.panel')
@section('title', 'Visitantes')

@section('content')
<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h3>Visitantes</h3>
        <a href="{{ route('visitors.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nuevo visitante
        </a>
    </div>
</div>

<div class="row">
    @forelse ($visitors as $visitor)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $visitor->name }}</h5>
                    <ul class="list-unstyled mb-3">
                        <li><strong>Email:</strong> {{ $visitor->email }}</li>
                        <li><strong>Teléfono:</strong> {{ $visitor->telephone }}</li>
                        <li><strong>Edad:</strong> {{ $visitor->age }}</li>
                        <li><strong>Idioma:</strong> {{ $visitor->language }}</li>
                        <li><strong>Nacionalidad:</strong> {{ $visitor->country }}</li>
                        <li><strong>Género:</strong> {{ $visitor->gender }}</li>
                        <li><strong>Tipo Identificación:</strong> {{ $visitor->identification_type }}</li>
                        <li><strong>Número Identificación:</strong> {{ $visitor->identification_number }}</li>
                    </ul>

                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('visitors.show', $visitor->id) }}" class="btn btn-sm btn-primary" title="Mostrar">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-sm btn-info" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('visitors.destroy', $visitor->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar este visitante? Esta acción no se puede deshacer.');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col">
            <p>No hay visitantes registrados.</p>
        </div>
    @endforelse
</div>

<div class="d-flex justify-content-center">
    {{ $visitors->links() }}
</div>
@endsection
