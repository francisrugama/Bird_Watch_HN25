@extends('layouts.panel')

@section('title','Catálogo de Aves')

@section('styles')
<style>
    .card-vertical-label {
        background: #000;
        color: #fff;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        font-weight: bold;
        padding: 0.5rem 0.75rem;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        letter-spacing: 1px;
        z-index: 10;
    }
    .card-custom {
        position: relative;
        overflow: hidden;
        border-radius: 0.5rem;
        box-shadow: 0 0.2rem 0.8rem rgb(0 0 0 / 0.1);
    }
    .card-img-top {
        height: 130px;
        object-fit: contain;
        padding: 1rem;
        background: #fff;
    }
</style>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h2 class="text-primary m-0">🐦 Catálogo de Aves</h2>
        <a href="{{ route('catalogs.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Nueva Ave
        </a>
    </div>
</div>

@if($catalogs->count())
    <div class="row">
        @foreach($catalogs as $catalog)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card-custom h-100">
                    <div class="card-vertical-label">
                        {{ strtoupper($catalog->category ?? 'AVE') }}
                    </div>
                    @if($catalog->image && file_exists(public_path($catalog->image)))
                        <img src="{{ asset($catalog->image) }}" alt="{{ $catalog->title }}" class="card-img-top">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center" style="height: 130px;">
                            <span class="text-muted">Sin imagen</span>
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark font-weight-bold text-center">
                            {{ $catalog->title }}
                        </h5>
                        <p class="card-text text-muted text-center mb-3">
                            {{ Str::limit($catalog->description, 80) }}
                        </p>
                        <div class="mt-auto d-flex justify-content-center gap-2">
                            <a href="{{ route('catalogs.show', $catalog->id) }}" class="btn btn-outline-primary btn-sm" title="Ver">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('catalogs.edit', $catalog->id) }}" class="btn btn-outline-info btn-sm" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('catalogs.destroy', $catalog->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta ave?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $catalogs->links() }}
    </div>
@else
    <div class="alert alert-info text-center">
        <i class="fas fa-dove fa-2x mb-2"></i><br>
        Aún no hay aves en el catálogo.
    </div>
@endif
@endsection
