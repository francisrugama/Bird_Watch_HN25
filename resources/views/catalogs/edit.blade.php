@extends('layouts.panel')

@section('title','Editar Catalogo')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('catalogs.update', $catalogs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $catalogs->title) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $catalogs->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Imagen (reemplazar)</label>
                        @if($catalogs->image && file_exists(public_path($catalogs->image)))
                            <div class="mb-2">
                                <img src="{{ asset($catalogs->image) }}" alt="Imagen actual" style="max-width:200px; height:auto; border-radius:6px;">
                            </div>
                        @endif
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        <small class="text-muted">Si subes una nueva imagen, reemplazará la actual.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('catalogs.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
