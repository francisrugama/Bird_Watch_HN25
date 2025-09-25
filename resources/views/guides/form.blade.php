<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del estudiante" value="{{ old('name', $students->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_student">Código del Estudiante</label>
                <input type="number" id="code_student" name="code_student"
                    class="form-control form-control-alternative" placeholder="Ingresar código del estudiante"
                    value="{{ old('code_student', $students->code_student ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">Número de cédula</label>
                <input type="text" id="identification" name="identification"
                    class="form-control form-control-alternative" placeholder="Ingresar número de cédula"
                    value="{{ old('identification', $students->identification ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar edad" value="{{ old('age', $students->age ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="d_birth">Fecha de Nacimiento</label>
                <input type="date" id="d_birth" name="d_birth" class="form-control form-control-alternative"
                    value="{{ old('d_birth', $students->d_birth ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="p_birth">Lugar de Nacimiento</label>
                <input type="text" id="p_birth" name="p_birth" class="form-control form-control-alternative"
                    placeholder="Ingresa lugar de nacimiento" value="{{ old('p_birth', $students->p_birth ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresa su dirección" value="{{ old('address', $students->address ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="sex">Género</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="" disabled>Seleccione su género</option>
                    <option value="Masculino" {{ old('sex', $students->sex ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('sex', $students->sex ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value="" disabled>Seleccione su nacionalidad</option>
                    <option value="Nicaragüense" {{ old('nationality', $students->nationality ?? '') == 'Nicaragüense' ? 'selected' : '' }}>Nicaragüense</option>
                    <option value="Costarricense" {{ old('nationality', $students->nationality ?? '') == 'Costarricense' ? 'selected' : '' }}>Costarricense</option>
                    <option value="Hondureño" {{ old('nationality', $students->nationality ?? '') == 'Hondureño' ? 'selected' : '' }}>Hondureño/a</option>
                    <option value="Salvadoreño" {{ old('nationality', $students->nationality ?? '') == 'Salvadoreño' ? 'selected' : '' }}>Salvadoreño/a</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>Seleccione su etnia</option>
                    <option value="Mestizo" {{ old('ethnicity', $students->ethnicity ?? '') == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                    <option value="Ruso" {{ old('ethnicity', $students->ethnicity ?? '') == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                    <option value="Criollo" {{ old('ethnicity', $students->ethnicity ?? '') == 'Criollo' ? 'selected' : '' }}>Criollo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número Telefónico</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="Ingresar su número telefónico" value="{{ old('telephone', $students->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">País</label>
                <select name="country" id="country" class="form-control">
                    <option value="" disabled>Seleccione su país de procedencia</option>
                    <option value="Nicaragua" {{ old('country', $students->country ?? '') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                    <option value="Costa Rica" {{ old('country', $students->country ?? '') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                    <option value="El Salvador" {{ old('country', $students->country ?? '') == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail">Correo electrónico</label>
                <input type="email" id="mail" name="mail" class="form-control form-control-alternative"
                    placeholder="Ingrese su Correo electrónico" value="{{ old('mail', $students->mail ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="departament">Departamento</label>
                <select name="departament" id="departament" class="form-control">
                    <option value="" disabled>Seleccione su departamento</option>
                    <option value="Estelí" {{ old('departament', $students->departament ?? '') == 'Estelí' ? 'selected' : '' }}>Estelí</option>
                    <option value="Chontales" {{ old('departament', $students->departament ?? '') == 'Chontales' ? 'selected' : '' }}>Chontales</option>
                    <option value="Managua" {{ old('departament', $students->departament ?? '') == 'Managua' ? 'selected' : '' }}>Managua</option>
                    <option value="Nueva Segovia" {{ old('departament', $students->departament ?? '') == 'Nueva Segovia' ? 'selected' : '' }}>Nueva Segovia</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="municipality">Municipio</label>
                <input type="text" id="municipality" name="municipality"
                    class="form-control form-control-alternative" placeholder="Ingrese su municipio"
                    value="{{ old('municipality', $students->municipality ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="academic_level">Nivel Académico</label>
                <select name="academic_level" id="academic_level" class="form-control">
                    <option value="" disabled>Seleccione su nivel académico</option>
                    <option value="Primaria" {{ old('academic_level', $students->academic_level ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                    <option value="Bachiller" {{ old('academic_level', $students->academic_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Licenciado" {{ old('academic_level', $students->academic_level ?? '') == 'Licenciado' ? 'selected' : '' }}>Licenciado</option>
                    <option value="Ingeniero" {{ old('academic_level', $students->academic_level ?? '') == 'Ingeniero' ? 'selected' : '' }}>Ingeniero</option>
                    <option value="Técnico" {{ old('academic_level', $students->academic_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione el estado civil</option>
                    <option value="Soltero/a" {{ old('marital_status', $students->marital_status ?? '') == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                    <option value="Casado/a" {{ old('marital_status', $students->marital_status ?? '') == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                    <option value="Divorciado/a" {{ old('marital_status', $students->marital_status ?? '') == 'Divorciado/a' ? 'selected' : '' }}>Divorciado/a</option>
                    <option value="Viudo/a" {{ old('marital_status', $students->marital_status ?? '') == 'Viudo/a' ? 'selected' : '' }}>Viudo/a</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible">Responsable</label>
                <input type="text" id="responsible" name="responsible" class="form-control form-control-alternative"
                    placeholder="Ingresar responsable del estudiante" value="{{ old('responsible', $students->responsible ?? '') }}">
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Estudiante
        </button>
    </div>
</div>
