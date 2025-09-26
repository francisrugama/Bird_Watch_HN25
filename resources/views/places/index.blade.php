@extends('layouts.panel')
@section('title', 'Lugar/Listar')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Lugares</h3>
                        <a href="{{ route('places.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nueva Lugar</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Disponibilidad de horario</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Recorrido</th>
                                <th scope="col">Hotel</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($places as $place)
                                <tr>
                                    <td>{{ $place->name }}</td>
                                    <td>{{ $place->description }}</td>
                                    <td>{{ $place->address }}</td>
                                    <td>{{ $place->availability_schedule }}</td>
                                    <td>{{ $place->type_reserve }}</td>
                                    <td>{{ $place->description }}</td>
                                    <td>{{ $place->tour_id }}</td>
                                    <td>{{ $place->hotel_id }}</td>
                                    <span class= "badge badge-pill badge-primary">{{$place->id}}</span>
                                    <td>
                                    {{$place->hotel->name}}
                                    </td>
                                    <td>
                                    {{$place->tour->name}}
                                    </td>
                                    <td>
                                    {{$place->created_at->format('d-m-y')}}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('places.show', $place->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('places.edit', $place->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('places.destroy', $place->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este lugar? ¡Esta acción no se puede deshacer.!')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash">Eliminar</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $places->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
