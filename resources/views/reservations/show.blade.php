@extends ('layouts.panel')
@section("title", 'Reservation/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Reserva</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('reservations.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la Reserva</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="status">
                                    <i class="fa fa-user"></i> estado de la reserva
                                </label>
                                <p>{{ $reservations->status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="people">
                                    <i class="fa fa-user"></i> people
                                </label>
                                <p>{{ $reservations->people }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="reservation_date">
                                    <i class="fa fa-user"></i> fecha de la reserva
                                </label>
                                <p>{{ $reservations->reservation_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="people_count">
                                    <i class="fas fa-envelope"></i> cantidad de personas
                                </label>
                                <p>{{ $reservations->people_count }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="other_service">
                                    <i class="fa fa-user"></i> otros servicios
                                </label>
                                <p>{{ $reservations->other_service }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="price_person">
                                    <i class="fa fa-user"></i> precio por persona
                                </label>
                                <p>{{ $reservations->price_person }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="total">
                                    <i class="fa fa-user"></i> total
                                </label>
                                <p>{{ $reservations->total }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Id_visitor">
                                    <i class="fa fa-user"></i> Id del visitante
                                </label>
                                <p>{{ $reservations->visitors->name }}</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>
@endsection
