@extends('layouts.panel')
@section('title', 'Visitor')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Visitantes</h3>
                        <a href="{{ route('visitors.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo visitante
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre el cliente</th>
                                <th scope="col">Correo</th>
                                 <th scope="col">Numero teléfonico</th>                          
                                <th scope="col">Edad</th>
                                <th scope="col">language</th>
                                 <th scope="col">Nacionalidad</th>
                                <th scope="col">gender</th>
                                <th scope="col">Identificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $visitor->name}}</td>
                                    <td>{{ $visitor->email}}</td>
                                    <td>{{ $visitor->telephone}}</td>
                                    <td>{{ $visitor->age}}</td>
                                    <td>{{ $visitor->language}}</td>
                                    <td>{{ $visitor->country}}</td>
                                    <td>{{ $visitor->gender}}</td>
                                    <td>{{ $visitor->identification_type}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('visitors.show', $visitor->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('visitors.destroy', $visitor->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este visitante? Esta acción no se puede deshacer.');">
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
                        {{ $visitors->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection