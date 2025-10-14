<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                    placeholder="Ingresar estado"
                    value="{{ old('status', $reservations->status) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="people">Personas</label>
                <input type="number" id="people" name="people" class="form-control form-control-alternative"
                    placeholder="Ingresar el número de personas"
                    value="{{ old('people', $reservations->people) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="people_count">Cantidad maxima personas</label>
                <input type="number" id="people_count" name="people_count" class="form-control form-control-alternative"
                    placeholder="Ingresar la cantidad maxima de personas"
                    value="{{ old('people_count', $reservations->people_count) }}">
            </div>
        </div>
    </div>






    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reservation_date">Fecha de reserva</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha de reserva"
                    value="{{ old('reservation_date', $reservations->reservation_date) }}">
            </div>
        </div>
    </div>




 <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="other_service">Otros servicios</label>
                <input type="text" id="other_service" name="other_service" class="form-control form-control-alternative"
                    placeholder="Ingresar otros servicios"
                    value="{{ old('other_service', $reservations->other_service) }}">
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="price_person">Precio por persona</label>
                <input type="number" id="price_person" name="price_person" class="form-control form-control-alternative"
                    placeholder="Precio por persona"
                    value="{{ old('price_person', $reservations->price_person) }}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total">Total</label>
                <input type="number" id="total" name="total" class="form-control form-control-alternative"
                    placeholder="total"
                    value="{{ old('total', $reservations->total) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="visitor_id">Visita</label>
                <select id="visitor_id" name="visitor_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar visita</option>
                    @foreach($visitors as $visitor)
                    <option value="{{ $visitor->id }}" {{ old('visitor_id', $reservations->visitor_id) == $visitor->id ? 'selected' : '' }}>
                        {{ $visitor->name }}
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
