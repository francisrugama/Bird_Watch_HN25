@extends('layouts.panel')
@section('title', 'historial/mostrar')
@section('content')
<div class="col-x1-12 order-x1-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class-"mb-0"><i class-"fas fa-newspaper">Ver historial</i> </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="(f route('historial_detaials.index') ])" class="btn btn-sm btn-primary">
                            <i class="fas fa-list">Volver</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del historial</h6>
                <div class="pl-1g-4">

                    <div class="row">
                        <div class="col-1g-12">
                            <div class-"form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fas fa-user">nombre</i>
                                </label>
                                <p>{{ $historial_details->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1g-12">
                            <div class="form-group">
                                <label class="form-control-label" for="status">
                                    <i class="fas fa-envelope">etado</i>
                                </label>
                                <p>{{ $historial_details->status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="type_service">
                                    <i class="fas fa-calendar-check">tipo de servicio</i>
                                </label>
                                <p>{{ $historial_details->type_service }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="people">
                                    <i class="fas fa-calendar-check">tipos de pago</i>
                                </label>
                                <p>{{ $historial_details->type_payment }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="total">
                                    <i class="fas fa-calendar-check">total</i>
                                </label>
                                <p>{{ $historial_details->total }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="reservation_id">
                                    <i class="fas fa-calendar-check">reservacion</i>
                                </label>
                                <p>{{ $historial_details->reservation_id }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="visitor_id">
                                    <i class="fas fa-calendar-check">visitante</i>
                                </label>
                                <p>{{ $historial_details->visitor_id }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class-"col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="tour_id">
                                    <i class="fas fa-calendar-check">recorido</i>
                                </label>
                                <p>{{ $historial_details->tour_id }}</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
