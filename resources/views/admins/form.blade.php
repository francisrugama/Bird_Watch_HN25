<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre del Administrador</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresa el nombre" value="{{ old('name', $admins->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo del Administrador</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Ingrese el correo electrónico" value="{{ old('email', $admins->email ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Teléfono del Administrador</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="Ingrese el número de teléfono" value="{{ old('telephone', $admins->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad del Administrador</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingrese la edad" value="{{ old('age', $admins->age ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country">País del Administrador</label>
                <input type="text" id="country" name="country" class="form-control form-control-alternative"
                    placeholder="Ingrese el país" value="{{ old('country', $admins->country ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">Género del Administrador</label>
                <select id="gender" name="gender" class="form-control form-control-alternative">
                    <option value="">Seleccione el género</option>
                    <option value="masculino" {{ old('gender', $admins->gender ?? '') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ old('gender', $admins->gender ?? '') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="otro" {{ old('gender', $admins->gender ?? '') == 'otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>
    </div>

    <hr class="my-4" />

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Actualizar Administrador
            </button>
        </div>
    </div>
</div>
