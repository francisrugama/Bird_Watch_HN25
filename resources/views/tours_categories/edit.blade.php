@extends('layouts.panel')

@section('title', 'categorias de turs/Actualizar')

@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle"x</i> Actualizar categorias de turs
                        </h3>

                    </div>
                    <div class="col-4 text-right">
                        <a href="ff route('tours_categories.index') ))" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow- left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body container-fluid">
                <form action="f/ route('tours_categories.update', $tours_categories->$id) 1" method="POST">
                    @csrf
                    @method('PUT')
                    @include('tours_categories.form')
                </form>
            </div>
        </div>
    </div>

@endsection
