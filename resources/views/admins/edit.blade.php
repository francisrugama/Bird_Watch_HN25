@extends('layouts.panel')

@section('title', 'Actualizar Administrador')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-edit"></i> Actualizar administrador
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('admins.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admins.update', $admins->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admins.form')
                </form>
            </div>
        </div>
    </div>
@endsection
