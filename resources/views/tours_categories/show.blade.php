@extends('layouts.panel')

@section('title', 'categorias de turs/mostrar')

@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="nb-0"> <i class="fas fa-newspaper"></i> Ver Categoria de tours</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="(f route('tours_categories.index') ])" class="btn btn-sm btn-primary">
                            <i class="fas fa-list">Volver</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de categorias de turs</h6>
                <div class="pl-1g-4">

                    <div class="row">
                        <div class="col-1g-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fas fa-user">Nombre</i>
                                </label>
                                <p>{{ $tours_categorie->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1g-6">
                            <div class="form-group">
                                <label class="form-control-label" for="description">
                                    <i class="fas fa-calendar-check">descripcion</i>
                                </label>
                                <p>{{ $tour_categorie->description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
