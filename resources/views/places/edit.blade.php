@extends('layouts.panel')
@section('title', 'Plaza/actualizar')
@section('content')
<div class = "col-x1-x12 order-x1-1">
    <div class = "card bg-secondary shadow">
        <div class= "card-heater bg white border-0">
            <div class = "row align-items-center">
                <div class = "col-8">
                    <h3 class= "mb-0"><i class ="fas fa plus-circle"></i>actualizar plaza </h3>
                </div>
                <div class = "col-4 text right">
                    <a href="{{ route('places.index') }}" class = "btn btn-sm btn-primary">
                        <i class = "fas fa-arrow-left"></i> volver
                    </a>
                </div>
            </div>
        </div>
        
        <div class = "card-body container-fluid">
            <form action= "{{ route("places.update", $places->id) }}" method="POST">
             @csrf

             @method('PUT')

             @include('places.form')
            </form>
        </div>
    </div>

</div>
@endsection
