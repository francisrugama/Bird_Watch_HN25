@extends('layouts.panel')
@section('title', 'categoria de tur/crear')
@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0 ">> <i class="fas fa_plus_circle"> </i> Registrar categorias de Recorrido</h3>
                    </div>
                    <div class="colo-4 text-righ">
                        <a href="{{ route('tours_categories.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <form action="{{ route('tours_categories.store') }}" method="POST">
                    @csrf
                    @include('tours_categories.from')
                </form>
            </div>
        </div>
    </div>

@endsection