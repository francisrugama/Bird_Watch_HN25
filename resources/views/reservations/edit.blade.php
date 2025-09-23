@extends('layouts.panel')

@section('title', 'Reservation/Actualizar')

@section('content')

    <div class="col-xl-12 order-xl-l">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle"></i> Registrar Reserva</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('reservations.index')}}" class="btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body container-fluid">

                    <form action="{{ route('reservations.update', $reservations->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('reservations.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
