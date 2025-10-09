@extends('layouts.panel')

@section('title','Nuevo Catalogo')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('catalogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title"
                               class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        <small class="text-muted">JPG, PNG, GIF - max 2MB</small>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('catalogs.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
