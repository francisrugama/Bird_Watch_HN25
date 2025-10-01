<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar Nombre"
                value="{{ old('name', $places->name)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Descripcion</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresar Descripcion"
                value="{{ old('address', $places->address)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="availability_schedule"> Fecha de dispunibilidad</label>
                <input type="date" id="availability_schedule" name="availability_schedule" class="form-control form-control-alternative"
                placeholder="ingresar disponibilidad de horario"
                value="{{ old('availability_schedule', $places->availability_schedule)}}">
            </select>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descricción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="fecha de aquisicion"
                value="{{ old('description', $places->description)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_reserve">Tipo de reserva</label>
                <input type="text" id="type_reserve" name="type_reserve" class="form-control form-control-alternative"
                placeholder="Tipo de reserva"
                value="{{ old('type_reserve', $places->type_reserve)}}">
            </select>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="tour_id">Tours</label>
            <select id="tour_id" name="tour_id" class="form-control form-control-alternative">
                <option value="">Seleccionar tour</option>
                @foreach($tours as $tour)
                    <option value="{{ $tour->id }}" {{ old('tour_id', $places->tour) == $admin->id ? 'selected' : '' }}>
                        {{ $tour->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="hotel_id">Hotel</label>
            <select id="hotel_id" name="hotel_id" class="form-control form-control-alternative">
                <option value="">Seleccionar hotel</option>
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}" {{ old('hotel_id', $places->hotel) == $hotel->id ? 'selected' : '' }}>
                        {{ $hotel->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar Lugar
        </button>
    </div>
</div>
