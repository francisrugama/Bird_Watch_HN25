<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre del guia</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del guia" value="{{ old('name', $guides->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">correo elctronico del guia</label>
                <input type="text" id="email" name="email"
                    class="form-control form-control-alternative" placeholder="Ingresar correo electronico "
                    value="{{ old('email', $guides->email ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">Número de telefono</label>
                <input type="text" id="telephone" name="telephone"
                    class="form-control form-control-alternative" placeholder="Ingresar número de telefono"
                    value="{{ old('telephone', $guides->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="experience">Experiencia</label>
                <input type="experience" id="experience" name="experience" class="form-control form-control-alternative"
                    placeholder="Ingresar experiencia" value="{{ old('experience', $guides->experience ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="language">Fecha de Nacimiento</label>
                <input type="text" id="language" name="language" class="form-control form-control-alternative"
                    value="{{ old('language', $guides->language ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Fecha de nacimiento</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de nacimiento" value="{{ old('age', $guides->age ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Género</label>
                <select name="gender" id="sex" class="form-control">
                    <option value="" disabled>Seleccione su género</option>
                    <option value="Masculino" {{ old('gender', $guides->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $guides->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Guia
        </button>
    </div>
</div>
