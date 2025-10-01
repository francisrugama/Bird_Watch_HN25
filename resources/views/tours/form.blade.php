<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre"
                    value="{{ old('name', $tours->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar descripción">{{ old('description', $tours->description) }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="duration">Duración</label>
                <input type="text" id="duration" name="duration" class="form-control form-control-alternative"
                    placeholder="Ingresar duración"
                    value="{{ old('duration', $tours->duration) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="location">Localidad</label>
                <input type="text" id="location" name="location" class="form-control form-control-alternative"
                    placeholder="Ingresar localidad"
                    value="{{ old('location', $tours->location) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_transport">Tipo de transporte</label>
                <input type="text" id="type_transport" name="type_transport" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de transporte"
                    value="{{ old('type_transport', $tours->type_transport) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tour_language">Lenguaje del tour</label>
                <input type="text" id="tour_language" name="tour_language" class="form-control form-control-alternative"
                    placeholder="Ingresar lenguaje del tour"
                    value="{{ old('tour_language', $tours->tour_language) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="max_capacity">Capacidad máxima</label>
                <input type="number" id="max_capacity" name="max_capacity" class="form-control form-control-alternative"
                    placeholder="Ingresar capacidad máxima"
                    value="{{ old('max_capacity', $tours->max_capacity) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reservation_id">Reservación</label>
                <select id="reservation_id" name="reservation_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar reservación</option>
                    @foreach($reservations as $reservation)
                        <option value="{{ $reservation->id }}" {{ old('reservation_id', $tours->reservation_id) == $reservation->id ? 'selected' : '' }}>
                            {{ $reservation->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="guide_id">Guía</label>
                <select id="guide_id" name="guide_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar guía</option>
                    @foreach($guides as $guide)
                        <option value="{{ $guide->id }}" {{ old('guide_id', $tours->guide_id) == $guide->id ? 'selected' : '' }}>
                            {{ $guide->name ?? $guide->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tour_category_id">Categoría</label>
                <select id="tour_category_id" name="tour_category_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar categoría</option>
                    @foreach($tours_categories as $category)
                        <option value="{{ $category->id }}" {{ old('tour_category_id', $tours->tour_category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="admin_id">Administrador</label>
                <select id="admin_id" name="admin_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar administrador</option>
                    @foreach($admins as $admin)
                        <option value="{{ $admin->id }}" {{ old('admin_id', $tour->admin_id) == $admin->id ? 'selected' : '' }}>
                            {{ $admin->name ?? $admin->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Rceorrido
        </button>
    </div>
</div>