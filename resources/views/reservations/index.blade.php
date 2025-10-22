@extends('layouts.panel')
@section('title', 'Reservation')

@section('content')
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3>Reservaciones</h3>
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nueva Reservación
            </a>
        </div>
    </div>

    <div class="row">
        @foreach ($reservations as $reservation)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Estado: {{ ucfirst($reservation->status) }}</h5>

                        <p><strong>Persona:</strong> {{ $reservation->people }}</p>
                        <p><strong>Cantidad de personas:</strong> {{ $reservation->people_count }}</p>
                        <p><strong>Fecha de la reserva:</strong> {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('d-m-Y') }}</p>
                        <p><strong>Otros servicios:</strong> {{ $reservation->other_service ?? 'N/A' }}</p>
                        <p><strong>Precio por persona:</strong> ${{ number_format($reservation->price_person, 2) }}</p>
                        <p><strong>Total:</strong> ${{ number_format($reservation->total, 2) }}</p>
                        <p><strong>Visitante:</strong> {{ $reservation->visitors->name ?? 'N/A' }}</p>

                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Mostrar
                            </a>
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST"
                                onsubmit="return confirm('¿Está seguro que desea eliminar esta reserva? Esta acción no se puede deshacer.');"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $reservations->links() }}
    </div>
@endsection
