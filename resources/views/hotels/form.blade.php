<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar Nombre"
                    value="{{ old('name', $hotels->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="descriptions">Descripcion</label>
                <input type="text" id="descriptions" name="descriptions" class="form-control form-control-alternative"
                    placeholder="Ingresar descripción"
                    value="{{ old('descriptions', $hotels->descriptions ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
<<<<<<< HEAD
                <label class="form-control-label" for="type_habitation">Tipo de Habitación</label>
=======
                <label class="form-control-label" for="type_habitation">tipo de habitación</label>
>>>>>>> 54bdaa5 (fix: bug fixes)
                <input type="text" id="type_habitation" name="type_habitation" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de habitación"
                    value="{{ old('type_habitation', $hotels->type_habitation ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar dirección"
                    value="{{ old('address', $hotels->address ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
<<<<<<< HEAD
=======
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                    placeholder="Ingresar estado"
                    value="{{ old('status', $hotels->status ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
>>>>>>> 54bdaa5 (fix: bug fixes)
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                    placeholder="Ingresar estado"
                    value="{{ old('status', $hotels->status ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="price_night">Precio por Noche</label>
                <input type="text" id="price_night" name="price_night" class="form-control form-control-alternative"
                    placeholder="Ingresar el precio por noche"
                    value="{{ old('price_night', $hotels->price_night ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Teléfono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="teléfono"
                    value="{{ old('telephone', $hotels->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
<<<<<<< HEAD
                <label class="form-control-label" for="responsible">Responsable</label>
=======
                <label class="form-control-label" for="responsible">responsable</label>
>>>>>>> 54bdaa5 (fix: bug fixes)
                <input type="text" id="responsible" name="responsible" class="form-control form-control-alternative"
                    placeholder="Ingresar responsable"
                    value="{{ old('responsible', $hotels->responsible ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="qualification">Calificacion</label>
                <input type="number" id="qualification" name="qualification" class="form-control form-control-alternative"
                    placeholder="Ingresar calificación"
                    value="{{ old('qualification', $hotels->qualification ?? '') }}">
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======














>>>>>>> 54bdaa5 (fix: bug fixes)


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
