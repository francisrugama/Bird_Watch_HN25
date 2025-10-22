@extends('layouts.panel')

@section('title', 'Registrar Hotel')

@section('content')
<div class="container">
    <div class="col-xl-12 order-xl-1">
        <div class="card shadow bg-light border-0">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0"><i class="fas fa-hotel"></i> Registrar Hotel</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('hotels.index') }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('hotels.store') }}" method="POST">
                    @csrf

                    {{-- Formulario con estilo bonito --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre del Hotel</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ej. Hotel Paraíso" required>
                            </div>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="telephone" class="form-label">Teléfono</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Ej. +52 123 456 7890" required>
                            </div>
                            @error('telephone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <textarea name="address" rows="2" class="form-control" placeholder="Dirección completa del hotel">{{ old('address') }}</textarea>
                            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="type_habitation" class="form-label">Tipo de Habitación</label>
                            <select name="type_habitation" class="form-control" required>
                                <option value="">-- Selecciona --</option>
                                <option value="Individual" {{ old('type_habitation') == 'Individual' ? 'selected' : '' }}>Individual</option>
                                <option value="Doble" {{ old('type_habitation') == 'Doble' ? 'selected' : '' }}>Doble</option>
                                <option value="Suite" {{ old('type_habitation') == 'Suite' ? 'selected' : '' }}>Suite</option>
                            </select>
                            @error('type_habitation') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price_night" class="form-label">Precio por noche</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" name="price_night" class="form-control" value="{{ old('price_night') }}" placeholder="Ej. 1200.00" step="0.01" required>
                            </div>
                            @error('price_night') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Estado</label>
                            <select name="status" class="form-control" required>
                                <option value="">-- Selecciona --</option>
                                <option value="Activo" {{ old('status') == 'Activo' ? 'selected' : '' }}>Activo</option>
                                <option value="Inactivo" {{ old('status') == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="descriptions" class="form-label">Descripción del Hotel</label>
                            <textarea name="descriptions" rows="3" class="form-control" placeholder="Describe el hotel brevemente">{{ old('descriptions') }}</textarea>
                            @error('descriptions') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="responsible" class="form-label">Responsable</label>
                            <input type="text" name="responsible" class="form-control" value="{{ old('responsible') }}" placeholder="Nombre del encargado" required>
                            @error('responsible') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="qualification" class="form-label">Calificación</label>
                            <input type="number" name="qualification" class="form-control" step="0.1" max="5" value="{{ old('qualification') }}" placeholder="Ej. 4.5">
                            @error('qualification') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-5">
                            <i class="fas fa-save"></i> Guardar Hotel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
