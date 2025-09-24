<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="name">nombre del administrador</label>
                <input type="text" id="name" name="name" class="form-control form-cntrol-altenative"
                    placeholder="ingresa su nombre" values="{{ old('name', $admin->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="mail">correo del administrador</label>
                <input type="email" id="mail" name="mail" class="form-control form-cntrol-altenative"
                    placeholder="ingrese su correo electronico" values="{{ old('mail', $admin->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="telephone">telefono de administrador</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-cntrol-altenative"
                    placeholder="ingrese su numero de telefono"
                    values="{{ old('telephone', $admin->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="age">edad del administrador</label>
                <input type="number" id="age" name="age" class="form-control form-cntrol-altenative"
                    placeholder="ingrese su edad" values="{{ old('age', $admin->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="country">departamento del profesor</label>
                <input type="text" id="country" name="country" class="form-control form-cntrol-altenative"
                    placeholder="ingrese su departamento"
                    values="{{ old('country', $admin->country) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form:grup">
                <label class="form-control-label" for="gender">genero del administrador</label>
                <input type="text" id="gender" name="gender" class="form-control form-cntrol-altenative"
                    placeholder="ingrese su genero" values="{{ old('gender', $admin->gender) }}">
            </div>
        </div>
    </div>


</div>
 