<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombres</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar Nombre"
                    value="{{ old('name', $historial_details->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                    placeholder="ingresar Estado"
                    value="{{ old('description', $historial_details->status) }}">
            </div>
        </div>
    </div>






    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_service">Tipo de Servicio</label>
                <input type="text" id="type_service" name="type_service" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de Servicio"
                    value="{{ old('type_service', $historial_details->type_service) }}">
            </div>
        </div>
    </div>










<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_payment">Duracion</label>
                <input type="text" id="type_payment" name="type_payment" class="form-control form-control-alternative"
                    placeholder="Ingresar duration"
                    value="{{ old('type_payment', $historial_details->type_payment) }}">
            </div>
        </div>
    </div>









<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total">Localidad</label>
                <input type="text" id="total" name="total" class="form-control form-control-alternative"
                    placeholder="Ingresar location"
                    value="{{ old('total', $historial_details->total) }}">
            </div>
        </div>
    </div>




<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="reservation_id">Reservacion</label>
            <select id="reservation_id" name="reservation_id" class="form-control form-control-alternative">
                <option value="">Seleccionar reserva</option>
                @foreach($reservations as $reservation)
                    <option value="{{ $reservation->id }}" {{ old('reservation_id', $historial_details->reservation_id) == $reservation->id ? 'selected' : '' }}>
                        {{ $reservation->status }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>







<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="visitor_id">Visitante</label>
            <select id="visitor_id" name="visitor_id" class="form-control form-control-alternative">
                <option value="">Seleccionar Visitante</option>
                @foreach($visitors as $visitor)
                    <option value="{{ $visitor->id }}" {{ old('visitor_id', $historial_details->visitor_id) == $visitor->id ? 'selected' : '' }}>
                        {{ $visitor->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>








<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="tour_id">Categoría</label>
            <select id="tour_id" name="tour_id" class="form-control form-control-alternative">
                <option value="">Seleccionar recorido</option>
                @foreach($tours as $tour)
                    <option value="{{ $tour->id }}" {{ old('tour_id', $historial_details->tour_id) == $tour->id ? 'selected' : '' }}>
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
