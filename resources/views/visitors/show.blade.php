@extends('layouts.panel')
@section('title', 'Visitor / Detalle')

@section('content')
<div class="col-xl-8 offset-xl-2">
    <div class="card shadow">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0"><i class="fas fa-user"></i> Detalle del Visitante</h3>
            <a href="{{ route('visitors.index') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>

        <div class="card-body">
            <h6 class="text-muted mb-4">Información del Visitante</h6>

            <dl class="row">
                <dt class="col-sm-4"><i class="fa fa-user"></i> Nombre Completo</dt>
                <dd class="col-sm-8">{{ $visitors->name }}</dd>

                <dt class="col-sm-4"><i class="fa fa-envelope"></i> Correo</dt>
                <dd class="col-sm-8">{{ $visitors->email }}</dd>

                <dt class="col-sm-4"><i class="fa fa-phone"></i> Teléfono</dt>
                <dd class="col-sm-8">{{ $visitors->telephone }}</dd>

                <dt class="col-sm-4"><i class="fas fa-birthday-cake"></i> Edad</dt>
                <dd class="col-sm-8">{{ $visitors->age }}</dd>

                <dt class="col-sm-4"><i class="fa fa-language"></i> Idioma</dt>
                <dd class="col-sm-8">{{ $visitors->language }}</dd>

                <dt class="col-sm-4"><i class="fa fa-flag"></i> Nacionalidad</dt>
                <dd class="col-sm-8">{{ $visitors->country }}</dd>

                <dt class="col-sm-4"><i class="fa fa-venus-mars"></i> Género</dt>
                <dd class="col-sm-8">{{ $visitors->gender }}</dd>

                <dt class="col-sm-4"><i class="fa fa-id-card"></i> Tipo Identificación</dt>
                <dd class="col-sm-8">{{ $visitors->identification_type }}</dd>

                <dt class="col-sm-4"><i class="fa fa-id-badge"></i> Número de Identificación</dt>
                <dd class="col-sm-8">{{ $visitors->identification_number }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection
