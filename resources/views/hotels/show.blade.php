@extends ('layouts.panel')
@section("title", 'Hotes/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Reserva</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('hotels.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información deL hotel</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fa fa-user"></i> nombre del hotel
                                </label>
                                <p>{{ $hotels->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="descripcion">
                                    <i class="fa fa-user"></i> descripcion
                                </label>
                                <p>{{ $hotels->descriptions }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="type_abitation">
                                    <i class="fa fa-user"></i> tipo de habitacion
                                </label>
                                <p>{{ $hotels->type_habitation }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">
                                    <i class="fas fa-envelope"></i> direccion
                                </label>
                                <p>{{ $hotels->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="status">
                                    <i class="fa fa-user"></i> status
                                </label>
                                <p>{{ $hotels->status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="price_night">
                                    <i class="fa fa-user"></i> precio por noche
                                </label>
                                <p>{{ $hotels->price_night }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="telephone">
                                    <i class="fa fa-user"></i> teléfono
                                </label>
                                <p>{{ $hotels->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="responsible">
                                    <i class="fa fa-user"></i> responsable
                                </label>
                                <p>{{ $hotels->responsible }}</p>
                            </div>
                        </div>
                    </div>





<div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="qualification">
                                    <i class="fa fa-user"></i> calificación
                                </label>
                                <p>{{ $hotels->qualification }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
