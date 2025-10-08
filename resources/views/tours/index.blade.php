@extends('layouts.panel')
@section('title', 'Recorridos')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Recorrido</h3>
                        <a href="{{ route('tours.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Recorrido
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Tipo de actividad</th>
                                <th scope="col">Duracion</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Tipo de transporte</th>
                                <th scope="col">Lenguaje del tour</th>
                                <th scope="col">Capacidad máxima</th>
                                <th scope="col">Id de reservacion</th>
                                <th scope="col">Id del guia</th>
                                <th scope="col">Id de categoria de tour</th>
                                <th scope="col">Id del administrador</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $tour)
                                <tr>

                                    <td>{{ $tour->name }}</td>
                                    <td>{{ $tour->description }}</td>
                                    <td>{{ $tour->type_activity }}</td>
                                    <td>{{ $tour->duration }}</td>
                                    <td>{{ $tour->location }}</td>
                                    <td>{{ $tour->type_transport }}</td>
                                    <td>{{ $tour->tour_language }}</td>
                                    <td>{{ $tour->max_capacity }}</td>
                                    <td>{{ $tour->reservations->status }}</td>
                                    <td>{{ $tour->guides->name }}</td>
                                    <td>{{ $tour->tours_categories->name }}</td>
                                    <td>{{ $tour->admins->name }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('tours.destroy', $tour->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este tour? Esta acción no se puede deshacer.');">
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
                        {{ $tours->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
