@extends('layouts.panel')
@section('title', 'historial/crear')
@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0 ">> <i class="fas fa_plus_circle"> </i> Registrar historial</h3>
                    </div>
                    <div class="colo-4 text-righ">
                        <a href="{{ route('historial_detaials.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <form action="{{ route('historial_detaials.store') }}" method="POST">
                    @csrf
                    @include('historial_detaials.from')
                </form>
            </div>
        </div>
    </div>

@endsection