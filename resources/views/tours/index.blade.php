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
                                <th scope="col">Descripción</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Capacidad máxima</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $tour)
                                <tr>
                                    <td>{{ $tour->name }}</td>
                                    <td>{{ Str::limit($tour->description, 50) }}</td>
                                    <td>{{ $tour->duration }}</td>
                                    <td>{{ $tour->location }}</td>
                                    <td>{{ $tour->max_capacity }}</td>
                                    <td>{{ $tour->id_reservations }}</td>
                                    <td>{{ $tour->id_guides }}</td>
                                    <td>{{ $tour->id_categories }}</td>
                                    <td>{{ $tour->id_admin }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('tours.destroy', $tour->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este Tour? Esta acción no se puede deshacer.');">
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
