@extends('layouts.panel')
@section('title', 'Lugar/mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver plaza</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('places.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Nombre</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user">Nombre</i>
                                </label>
                                <p>{{ $places->name }}</p>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address" class="form-control-label">
                                    <i class="fas fa-user">Direccion</i>
                                </label>
                                <p>{{ $places->address }}</p>
                            </div>
                        </div>
                    </div>

                       <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="availability_schedule" class="form-control-label">
                                    <i class="fas fa-user">Disponibilidad de horario</i>
                                </label>
                                <p>{{ $places->availability_schedule }}</p>
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripcion</i>
                                </label>
                                <p>{{ $places->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for=supplier>
                                    <i class="fas fa-user-graduate">Proveedor</i>
                                </label>
                                <p>{{ $places->tour->name}}</p>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for=responsible>
                                    <i class="fas fa-user-graduate">Responsable</i>
                                </label>
                                <p>{{ $places->hotel->name}}</p>
                            </div>
                        </div>
                    </div>

                  <div class="row">
                     <div class="col-lg-12">
                          <div class="form-group">
                              <label class="form-control-label" for=raw_materials>
                          <i class="fas fa-user-graduate">Fecha</i>
                         </label>
                                <p>{{ $places->created_at->format('d-m-y')}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection