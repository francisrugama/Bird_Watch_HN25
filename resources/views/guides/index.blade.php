@extends('layouts.panel')
@section('Title','Guias')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Guias</h3>
                    <a href="{{ route('guides.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Guia
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Experiencia</th>
                            <th scope="col">Lenguage</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Genero</th>
                        </tr>
                    </thead>
                   <tbody>
                       @foreach($guides as $guide)
                            <tr>
                              <td>{{$guide->name}}</td>
                              <td>{{$guide->email}}</td>
                              <td>{{$guide->telephone}}</td>
                              <td>{{$guide->experience}}</td>
                              <td>{{$guide->language}}</td>
                              <td>{{$guide->age}}</td>
                              <td>{{$guide->gender}}</td>                      

                              <td style="white-space: nowrap; display: flex; align-items: center;">
                                  <a href="{{ route ('guides.show', $guide->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                      <i clas="fas fa-eye"></i> Mostrar
                                  </a>
                                  <a href="{{ route('guides.edit', $guide->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                      <i class="fas fa-eye"></i> Editar
                                  </a>
                                  <form action={{ route('guides.destroy', $guide->id) }}" method="POST"
                                      style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                      onsubmit="return confirm('Seguro de querer eliminar este guia? Esta accion no es reversible.')">
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
                    {{ $guides->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection