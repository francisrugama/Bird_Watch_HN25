
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="title">Titulo</label>
                <input type="text" id="title" name="title" class="form-control form-control-alternative"
                    placeholder="Ingresar Titulo" value="{{ old('title', $catalogs->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripcion</label>
                <input type="description" id="description" name="description"
                    class="form-control form-control-alternative" placeholder="Ingresar correo electrónico"
                    value="{{ old('description', $catalogs->description ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="image">Imagen</label>
                <input type="text" id="image" name="image"
                    class="form-control form-control-alternative" placeholder="Ingresar número de teléfono"
                    value="{{ old('image', $catalogs->image ?? '') }}">
            </div>
        </div>
    </div>


    <hr class="my-4" />

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Catalogo
            </button>
        </div>
    </div>
</div>
