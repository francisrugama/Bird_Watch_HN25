<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre"
                    value="{{ old('name', $visitors->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">correo</label>
                <input type="text" id="email" name="age" class="form-control form-control-alternative"
                    placeholder="ingresar el correo"
                    value="{{ old('email', $visitors->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Numero de celular</label>
                <input type="number" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="Ingresar el numero de celular del cliente"
                    value="{{ old('telephone', $visitors->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar la edad del cliente"
                    value="{{ old('age', $visitors->age) }}">
            </div>
        </div>
    </div>






<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="language">language</label>
                <input type="text" id="language" name="language" class="form-control form-control-alternative"
                    placeholder="Ingresar el idioma"
                    value="{{ old('language', $visitors->language) }}">
            </div>
        </div>
    </div>





<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country">pais</label>
                <input type="text" id="country" name="country" class="form-control form-control-alternative"
                    placeholder="Ingresar el pais del cliente"
                    value="{{ old('country', $visitors->country) }}">
            </div>
        </div>
    </div>


 




    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">sexo</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>seleccione su sexo</option>
                    <option value="Femenino" {{ old('gender', $visitors->gender ?? '') == 'Femenino' ? 'selected' : ''}}>Femenino</option>
                    <option value="Masculino" {{ old('gender', $visitors->gender ?? '') == 'Masculino' ? 'selected' : ''}}>Masculino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification_type">Identificación</label>
                <input type="number" id="identification_type" name="identification_type" class="form-control form-control-alternative"
                    placeholder="Ingresar su numero de cédula"
                    value="{{ old('identification_type', $visitors->identification_type) }}">
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