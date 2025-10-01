@extends('layouts.panel')
@section('title', 'historial')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">historial</h3>
                        <a href="{{ route('historial_details.create') }}" class="btn btn-primary">
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
                                <th scope="col">nombre de recorido</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historial_details as $historial_detail)
                                <tr>
                                    <td>{{ $historial_detail->name }}</td>
                                    <td>{{ $historial_detail->status }}</td>
                                    <td>{{ $historial_detail->people }}</td>
                                    <td>{{ $historial_detail->type_service }}</td>
                                    <td>{{ $historial_detail->total }}</td>
                                    <td>{{ $historial_detail->reservation->name }}</td>
                                    <td>{{ $historial_detail->visitor->name }}</td>
                                    <td>{{ $historial_detail->tour->name }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('historial_details.show', $historial_detail->$id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('historial_details.edit', $historial_detail->$id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('historial_details.destroy', $historial_detail->$id) }}" method="POST"
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
                        {{ $historial_details->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
