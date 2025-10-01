@extends('layouts.panel')
@section('title', 'Categorías de Rcorrido')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Categorías de Tours</h3>
                        <a href="{{ route('tours_categories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Categoría de recorrido
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours_categories as $tour_category)
                                <tr>
                                    <td>{{ $tours_categories->name }}</td>
                                    <td>{{ Str::limit($tours_categorie->description, 50) }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('tours_categories.show', $tour_category->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('tours_categories.edit', $tour_category->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('tours_categories.destroy', $tour_category->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta categoría de tour? Esta acción no se puede deshacer.')">
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
                        {{ $tours_categories->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection