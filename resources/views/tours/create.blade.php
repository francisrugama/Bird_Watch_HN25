@extends('layouts.panel')

@section('title', 'Recorrido/Crear')

@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle"></i> Registrar Recorrido</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('tours.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-truck"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body container-fluid">

                    <form action="{{ route('tours.store') }}" method="POST">
                        @csrf

                        @include('tours.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection