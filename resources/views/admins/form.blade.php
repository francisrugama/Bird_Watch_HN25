
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="name">nombre del Administrador</label>
                <input type="text" id="name" name="name" class="form-control form-cntrol-altenative"
                    placeholder="ingresa el nombre" values="{{ old('name', $admins->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="mail">Correo del Administrador</label>
                <input type="email" id="mail" name="mail" class="form-control form-cntrol-altenative"
                    placeholder="ingrese el correo electronico" values="{{ old('mail', $admins->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="telephone">Telefono de Administrador</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-cntrol-altenative"
                    placeholder="ingrese el numero de telefono"
                    values="{{ old('telephone', $admins->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="age">Edad del Administrador</label>
                <input type="number" id="age" name="age" class="form-control form-cntrol-altenative"
                    placeholder="ingrese la edad" values="{{ old('age', $admins->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="country">Departamento del Administrador</label>
                <input type="text" id="country" name="country" class="form-control form-cntrol-altenative"
                    placeholder="Ingrese el Pais"
                    values="{{ old('country', $admins->country) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="gender">Genero del Administrador</label>
                <input type="text" id="gender" name="gender" class="form-control form-cntrol-altenative"
                    placeholder="ingrese el genero" values="{{ old('gender', $admins->gender) }}">
            </div>
        </div>
    </div>
</div>



    <hr class="my-4" />

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Administrador
            </button>
        </div>
    </div>
</div>
