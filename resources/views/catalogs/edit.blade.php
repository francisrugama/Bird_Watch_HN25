@extends('layouts.panel')

@section('title','Catalogo/Editar')

@section('content')
<div class="col-xl-x12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa-edit"></i> Editar Catálogo</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('catalogs.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body container-fluid">
            <form action="{{ route('catalogs.update', $catalogs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('catalogs.form')
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar Catálogo</button>
                    <a href="{{ route('catalogs.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
