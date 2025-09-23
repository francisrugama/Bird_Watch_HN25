@extends('layouts.panel')
@section('title', 'Reservation')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Reservas</h3>
                        <a href="{{ route('reservations.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Reserva
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">estado</th>
                                <th scope="col">persona</th>
                                <th scope="col">Fecha de la reserva</th>
                                <th scope="col">cantidad de personas</th>
                                <th scope="col">otros servicios</th>
                                <th scope="col">precio por personas</th>
                                <th scope="col">total</th>
                                <th scope="col">id del visitante</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>

                                    <td>{{ $reservation->status}}</td>
                                    <td>{{ $reservation->people}}</td>
                                    <td>{{ $reservation->reservation_date}}</td>
                                    <td>{{ $reservation->people_count}}</td>
                                    <td>{{ $reservation->other_services}}</td>
                                    <td>{{ $reservation->precio_per_person}}</td>
                                    <td>{{ $reservation->total}}</td>
                                    <td>{{ $reservation->id_visitor}}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>

                                        <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta reserva? Esta acción no se puede deshacer.');">
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
                        {{ $reservations->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection