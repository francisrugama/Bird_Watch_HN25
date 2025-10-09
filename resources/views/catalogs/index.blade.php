@extends('layouts.panel')

@section('title','Catalogo')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Catalogo</h3>
                    <a href="{{ route('catalogs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Nuevo Catalogo
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Description</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                   <tbody>
                       @foreach($catalogs as $catalog)
                            <tr>
                              <td>{{ $catalog->title }}</td>
                              <td>{{ $catalog->description }}</td>

                              <td>
                                @if($catalog->image && file_exists(public_path($catalog->image)))
                                    <img src="{{ asset($catalog->image) }}" alt="Imagen" style="width:50px; height:60px; object-fit:cover; border-radius:4px;">
                                @else
                                    <span class="text-muted">Sin imagen</span>
                                @endif
                              </td>

                              <td style="white-space: nowrap; display: flex; align-items: center;">
                                  <a href="{{ route('catalogs.show', $catalog->id) }}"
                                     class="btn btn-primary btn-sm"
                                     style="margin-right: 5px;">
                                      <i class="fas fa-eye"></i> Mostrar
                                  </a>

                                  <a href="{{ route('catalogs.edit', $catalog->id) }}"
                                     class="btn btn-info btn-sm"
                                     style="margin-right: 5px;">
                                      <i class="fas fa-edit"></i> Editar
                                  </a>

                                  <form action="{{ route('catalogs.destroy', $catalog->id) }}"
                                        method="POST"
                                        style="margin: 0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Seguro de querer eliminar este catalogo? Esta acción no es reversible.')">
                                      @csrf
                                      @method('delete')
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
                <nav aria-label="..." class="d-flex-wrap justify-content-center justify-content-lg-start">
                    {{ $catalogs->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
