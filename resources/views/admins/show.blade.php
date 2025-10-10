@extends('layouts.panel')
@section('title', 'administrador/mostrar')
@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver administrador</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('admins.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list">Volver</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Administrador</h6>
                <div class="pl-1g-4">

                    <div class="row">
                        <div class="col-1g-12">
                            <div class-"form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fas fa-user">Nombre Completo</i>
                                </label>
                                <p>{{ $admins->name }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check">Correo Electronico</i>
                                </label>
                                <p>{{ $admins->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check">Telefono</i>
                                </label>
                                <p>{{ $admins->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check">Edad</i>
                                </label>
                                <p>{{ $admins->age }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check">Pais</i>
                                </label>
                                <p>{{ $admins->country }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calendar-check">Genero</i>
                                </label>
                                <p>{{ $admins->gender }}</p>
                        </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
