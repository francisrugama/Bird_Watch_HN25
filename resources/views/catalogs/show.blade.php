@extends('layouts.panel')

@section('title','Mostrar Catálogo')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $catalogs->title }}</h4>
                <div>
                    <a href="{{ route('catalogs.edit', $catalogs->id) }}" class="btn btn-sm btn-info">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                    <a href="{{ route('catalogs.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>

            <div class="card-body">
                <p class="text-muted mb-3">{{ $catalogs->description }}</p>

                @if($catalogs->image && file_exists(public_path($catalogs->image)))
                    <div class="mb-3">
                       <img src="{{ asset($catalogs->image) }}" alt="{{ $catalogs->title }}" style="max-width:100%; height:auto; border-radius:6px;">

                    </div>
                @else
                    <p class="text-muted">Sin imagen</p>
                @endif

                <ul class="list-unstyled mt-3">
                    <li><strong>ID:</strong> {{ $catalogs->id }}</li>
                    @if($catalogs->created_at)
                        <li><strong>Creado:</strong> {{ $catalogs->created_at->format('d/m/Y H:i') }}</li>
                    @endif
                    @if($catalogs->updated_at)
                        <li><strong>Última actualización:</strong> {{ $catalogs->updated_at->format('d/m/Y H:i') }}</li>
                    @endif
                </ul>
            </div>

            <div class="card-footer">
                <form action="{{ route('catalogs.destroy', $catalogs->id) }}" method="POST" onsubmit="return confirm('¿Seguro de querer eliminar este catálogo? Esta acción no es reversible.');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
