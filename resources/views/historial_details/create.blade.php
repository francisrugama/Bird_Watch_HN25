@extends('layouts.panel')
@section('title', 'historial/crear')
@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <h3 class="mb-@"><i class="fas fa-plus-circle"></i> Registrar historial</h3>
        </div>
        <div class="col-4 text-right">
            <a href="(( route('historial_details.index') ))"class="btn btn-sm btn-primary">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>
    </div>

    <div class="card-header bg-white border-0">
        <div class="row align-items-center">
            <div class="col-8">
                <div class="card-body container-fluid">
                    <form action="(( route('historial_details.store') H)" method="POST">
                        @csrf
                        @include('historial_details.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
