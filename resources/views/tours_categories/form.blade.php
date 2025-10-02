<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="name">nombre de las calificaciones de tur</label>
                <input type="text" id="name" name="name" class="form-control form-cntrol-altenative"
                    placeholder="ingresa el nombre" values="{{ old('name', $tours_categorie->name) }}">
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
 