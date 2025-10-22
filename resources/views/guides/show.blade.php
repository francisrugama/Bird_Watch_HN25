@extends('layouts.panel')

@section('title', 'Guia / Show')

@section('content')

<div class="col-xl-8 offset-xl-2">
    <div class="card bg-secondary shadow">

        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Guía</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('guides.index') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-list"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del Guía</h6>

            <div class="pl-lg-4">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="name"><i class="fas fa-user"></i> Nombre Completo</label>
                        <p>{{ $guides->name }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                        <p>{{ $guides->email }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="telephone"><i class="fas fa-phone"></i> Número de Teléfono</label>
                        <p>{{ $guides->telephone }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="experience"><i class="fas fa-briefcase"></i> Experiencia</label>
                        <p>{{ $guides->experience }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="language"><i class="fas fa-language"></i> Lenguaje</label>
                        <p>{{ $guides->language }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="age"><i class="fas fa-birthday-cake"></i> Edad</label>
                        <p>{{ $guides->age }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="form-control-label" for="gender"><i class="fas fa-venus-mars"></i> Género</label>
                        <p>{{ $guides->gender }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
