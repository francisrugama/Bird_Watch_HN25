@extends('layouts.panel')
@section('title', 'categorias de turs')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">categorias de turs</h3>
                        <a href="{{ route('tours_categories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nueva categoria de tur</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours_categories as $tours_categorie)
                                <tr>
                                    <td>{{ $tours_categorie->name }}</td>
                                    <td>{{ $tours_categorie->description }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('tours_categories.show', $tours_categorie->$id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('tours_categories.edit', $tours_categorie->$id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('tours_categories.destroy', $tours_categorie->$id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta categoria de tur? Esta acción no se puede deshacer.')">
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
                        {{ $teachers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
