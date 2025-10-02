<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="name">nombre del historial</label>
                <input type="text" id="name" name="name" class="form-control form-cntrol-altenative"
                    placeholder="ingresa el nombre" values="{{ old('name', $historial_details->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="status">estado del historial</label>
                <input type="text" id="status" name="status" class="form-control form-cntrol-altenative"
                    placeholder="ingrese el estado"
                    values="{{ old('status', $historial_details->status) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="type_service">tipos de servicios</label>
                <input type="text" id="type_service" name="type_service"
                    class="form-control form-cntrol-altenative" placeholder="ingrese el servicio"
                    values="{{ old('type_service', $historial_details->type_service) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="type_payment">tipos de pago</label>
                <input type="text" id="type_payment" name="type_payment" class="form-control form-cntrol-altenative"
                    placeholder="ingrese los tipos de servicios" values="{{ old('type_payment', $historial_details->type_payment) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="total">total</label>
                <input type="text" id="total" name="total" class="form-control form-cntrol-altenative"
                    placeholder="ingrese el total"
                    values="{{ old('total', $historial_details->total) }}">
            </div>
        </div>
    </div>

    <div class="col-1g-6">
        <div class="form-group">
            <label class="form-control-label" for="reservation_id">
                <i class="fas fa-graduation-cap"></i> reservacion
            </label>
            <select name="reservation_id" id="reservation_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar una reservacion</option>
                @foreach ($reservations as $reservation)
                    <option value="{{ $reservation->id }}"
                        {{ old('reservation_id', $historial_details->reservation_id ?? '') == $reservation->id ? 'selected' : '' }}>
                        {{ $reservation->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

    <div class="col-1g-6">
        <div class="form-group">
            <label class="form-control-label" for="visitor_id">
                <i class="fas fa-graduation-cap"></i> visitante
            </label>
            <select name="visitor_id" id="visitor_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un visitante</option>
                @foreach ($visitors as $visitor)
                    <option value="{{ $visitor->id }}"
                        {{ old('visitor_id', $historial_details->visitor_id ?? '') == $visitor->id ? 'selected' : '' }}>
                        {{ $visitor->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

    <div class="col-1g-6">
        <div class="form-group">
            <label class="form-control-label" for="tour_id">
                <i class="fas fa-graduation-cap"></i> recorido
            </label>
            <select name="tour_id" id="tour_id" class="form-control form-control-alternative">
                <option disabled selected>Seleccionar un recorido</option>
                @foreach ($tours as $tour)
                    <option value="{{ $tour->id }}"
                        {{ old('tour_id', $historial_details->tour_id ?? '') == $tour->id ? 'selected' : '' }}>
                        {{ $tour->name }}
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
            <i class="fas fa-save"></i> Guardar Cliente
        </button>
    </div>
</div>
