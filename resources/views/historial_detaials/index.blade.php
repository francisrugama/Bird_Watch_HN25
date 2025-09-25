@extends('layouts.panel')
@section('title', 'historial')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">historial</h3>
                        <a href="{{ route('historial_detaials.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nueva historial</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">nombre</th>
                                <th scope="col">estado</th>
                                <th scope="col">persona</th>
                                <th scope="col">tipo de servicio</th>
                                <th scope="col">total</th>
                                <th scope="col">nombre de reservacion</th>
                                <th scope="col">nombre de visitante</th>
                                <th scope="col">nombre de tur</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historial_detaials as $historial_detaial)
                                <tr>
                                    <td>{{ $historial_detaial->name }}</td>
                                    <td>{{ $historial_detaial->status }}</td>
                                    <td>{{ $historial_detaial->people }}</td>
                                    <td>{{ $historial_detaial->type_service }}</td>
                                    <td>{{ $historial_detaial->total }}</td>
                                    <td>{{ $historial_detaial->reservation->name }}</td>
                                    <td>{{ $historial_detaial->visitor->name }}</td>
                                    <td>{{ $historial_detaial->tour->name }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('historial_detaials.show', $historial_detaial->$id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('historial_detaials.edit', $historial_detaial->$id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('historial_detaials.destroy', $historial_detaial->$id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;""
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este historial? Esta acción no se puede deshacer.')">
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
                        {{ $tutions->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
