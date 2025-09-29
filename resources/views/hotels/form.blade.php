<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">name</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar name"
                    value="{{ old('name', $hotels->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">description</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar descripción"
                    value="{{ old('description', $hotels->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_habitacion">tipo de habitación</label>
                <input type="text" id="type_habitacion" name="type_habitacion" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de habitación"
                    value="{{ old('type_habitacion', $hotels->type_habitacion) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar dirección"
                    value="{{ old('address', $hotels->address) }}">
            </div>
        </div>
    </div>






 <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="price_night">precio por noche</label>
                <input type="number" id="price_night" name="price_night" class="form-control form-control-alternative"
                    placeholder="Ingresar el precio por noche"
                    value="{{ old('price_night', $hotels->price_night) }}">
            </div>
        </div>
    </div>






    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">teléfono</label>
                <input type="number" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="teléfono"
                    value="{{ old('telephone', $hotels->telephone) }}">
            </div>
        </div>
    </div>





    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible">responsable</label>
                <input type="number" id="responsible" name="responsible" class="form-control form-control-alternative"
                    placeholder="Ingresar ID del responsable"
                    value="{{ old('responsible', $hotels->responsible) }}">
            </div>
        </div>
    </div>




<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="qualification">qualification</label>
                <input type="number" id="qualification" name="qualification" class="form-control form-control-alternative"
                    placeholder="Ingresar ID de la calificación"
                    value="{{ old('qualification', $hotels->qualification) }}">
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
