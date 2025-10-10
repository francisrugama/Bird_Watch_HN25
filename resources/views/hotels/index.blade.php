@extends('layouts.panel')
@section('title', 'Hotel')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Hoteles</h3>
                        <a href="{{ route('hotels.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Hotel
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">nombre</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">tipo de habitacion</th>
                                <th scope="col">Direcion</th>
<<<<<<< HEAD
                                <th scope="col">Estado</th>
                                <th scope="col">Precio por noche</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Responsable</th>
                                <th scope="col">Calificación</th>
                                <th scope="col">Acciones</th>
=======
                                <th scope="col">estado</th>
                                <th scope="col">precio por noche</th>
                                <th scope="col">telefono</th>
                                <th scope="col">responsable</th>
                                <th scope="col">calificación</th>
>>>>>>> 54bdaa5 (fix: bug fixes)

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $hotel)
                                <tr>

                                    <td>{{ $hotel->name }}</td>
                                    <td>{{ $hotel->descriptions }}</td>
                                    <td>{{ $hotel->type_habitation }}</td>
                                    <td>{{ $hotel->address }}</td>
                                    <td>{{ $hotel->status }}</td>
                                    <td>{{ $hotel->price_night }}</td>
                                    <td>{{ $hotel->telephone }}</td>
                                    <td>{{ $hotel->responsible }}</td>
                                    <td>{{ $hotel->qualification }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este hotel? Esta acción no se puede deshacer.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
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
                        {{ $hotels->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
