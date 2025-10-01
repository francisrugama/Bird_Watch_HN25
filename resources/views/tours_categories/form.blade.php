<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="name">nombre de las calificaciones de Recorrido</label>
                <input type="text" id="name" name="name" class="form-control form-cntrol-altenative"
                    placeholder="ingresa el nombre" values="{{ old('name', $tours_categories->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="description">descripcion de las calificaciones de recorrido</label>
                <input type="text" id="description" name="description" class="form-control form-cntrol-altenative"
                    placeholder="ingrese las calificaciones de Recorrido" values="{{ old('description', $tours_categories->description) }}">
            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Categoria de Recorrido
            </button>
        </div>
    </div>
</div>



