@extends ('layouts.panel')
@section("title", 'Visitor/Show')

@section("content")
    <div class="col-xl-12 order-x-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Visitante</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('visitors.index' ) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Visitante</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fa fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $visitor->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                    <i class="fa fa-user"></i> correo
                                </label>
                                <p>{{ $visitor->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="telephone">
                                    <i class="fa fa-user"></i> numero telefonico
                                </label>
                                <p>{{ $visitor->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="age">
                                    <i class="fas fa-envelope"></i> edad
                                </label>
                                <p>{{ $visitor->age }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="language">
                                    <i class="fa fa-user"></i> idioma
                                </label>
                                <p>{{ $visitor->language }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="country">
                                    <i class="fa fa-user"></i> nacionalidad
                                </label>
                                <p>{{ $visitor->country }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="gender">
                                    <i class="fa fa-user"></i> genero
                                </label>
                                <p>{{ $visitor->gender }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="identification">
                                    <i class="fa fa-user"></i> identificacion
                                </label>
                                <p>{{ $visitor->identification_type }}</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>
@endsection