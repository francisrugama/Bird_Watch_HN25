@extends ('layouts.panel')
@section("title", 'Show/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Tour</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('tours.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Tour</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fa fa-user"></i> nombre del tour
                                </label>
                                <p>{{ $tour->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="description">
                                    <i class="fa fa-user"></i> descripcion
                                </label>
                                <p>{{ $tour->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="type_activity">
                                    <i class="fa fa-user"></i> tipo de actividad
                                </label>
                                <p>{{ $tour->type_activity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="duration">
                                    <i class="fas fa-envelope"></i> duración
                                </label>
                                <p>{{ $tour->duration }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="location">
                                    <i class="fa fa-user"></i> localidad
                                </label>
                                <p>{{ $tour->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="type_transport">
                                    <i class="fa fa-user"></i> tipo de transporte
                                </label>
                                <p>{{ $tour->type_transport }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="tour_language">
                                    <i class="fa fa-user"></i> idioma del tour
                                </label>
                                <p>{{ $tour->tour_language }}</p>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="max_capacity">
                                    <i class="fa fa-user"></i> capacidad máxima
                                </label>
                                <p>{{ $tour->max_capacity }}</p>
                            </div>
                        </div>
                    </div>





                   <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_reservations">
                                    <i class="fa fa-user"></i> id de reservas
                                </label>
                                <p>{{ $tour->id_reservations }}</p>
                            </div>
                        </div>
                    </div>






                   <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_guides">
                                    <i class="fa fa-user"></i> id de guía
                                </label>
                                <p>{{ $tour->id_guides }}</p>
                            </div>
                        </div>
                    </div>










                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_tour_categorie">
                                    <i class="fa fa-user"></i> Id de la categoría
                                </label>
                                <p>{{ $tour->id_tour_categorie }}</p>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Id_admin">
                                    <i class="fa fa-user"></i> Id del administrador
                                </label>
                                <p>{{ $tour->id_admin }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
