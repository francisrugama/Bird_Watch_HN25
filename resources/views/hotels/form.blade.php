<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name" class="form-control-label">Nombre</label>
                <input type="text" id="name" name="name"
                    class="form-control form-control-alternative @error('name') is-invalid @enderror"
                    placeholder="Ingresar Nombre"
                    value="{{ old('name', $hotels->name ?? '') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="descriptions" class="form-control-label">Descripción</label>
                <input type="text" id="descriptions" name="descriptions"
                    class="form-control form-control-alternative @error('descriptions') is-invalid @enderror"
                    placeholder="Ingresar descripción"
                    value="{{ old('descriptions', $hotels->descriptions ?? '') }}">
                @error('descriptions')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_habitation" class="form-control-label">Tipo de Habitación</label>
                <input type="text" id="type_habitation" name="type_habitation"
                    class="form-control form-control-alternative @error('type_habitation') is-invalid @enderror"
                    placeholder="Ingresar tipo de habitación"
                    value="{{ old('type_habitation', $hotels->type_habitation ?? '') }}">
                @error('type_habitation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="address" class="form-control-label">Dirección</label>
                <input type="text" id="address" name="address"
                    class="form-control form-control-alternative @error('address') is-invalid @enderror"
                    placeholder="Ingresar dirección"
                    value="{{ old('address', $hotels->address ?? '') }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="status" class="form-control-label">Estado</label>
            <select id="status" name="status" 
                class="form-control form-control-alternative @error('status') is-invalid @enderror">
                <option value="">Seleccione estado</option>
                <option value="Activo" {{ old('status', $hotels->status ?? '') == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ old('status', $hotels->status ?? '') == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="price_night" class="form-control-label">Precio por Noche</label>
                <input type="number" step="0.01" id="price_night" name="price_night"
                    class="form-control form-control-alternative @error('price_night') is-invalid @enderror"
                    placeholder="Ingresar el precio por noche"
                    value="{{ old('price_night', $hotels->price_night ?? '') }}">
                @error('price_night')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="telephone" class="form-control-label">Teléfono</label>
                <input type="text" id="telephone" name="telephone"
                    class="form-control form-control-alternative @error('telephone') is-invalid @enderror"
                    placeholder="Ingresar teléfono"
                    value="{{ old('telephone', $hotels->telephone ?? '') }}">
                @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="responsible" class="form-control-label">Responsable</label>
                <input type="text" id="responsible" name="responsible"
                    class="form-control form-control-alternative @error('responsible') is-invalid @enderror"
                    placeholder="Ingresar responsable"
                    value="{{ old('responsible', $hotels->responsible ?? '') }}">
                @error('responsible')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="qualification" class="form-control-label">Categoria de hotel</label>
                <input type="number" id="qualification" name="qualification" min="0" max="5" step="0.1"
                    class="form-control form-control-alternative @error('qualification') is-invalid @enderror"
                    placeholder="Ingresar categoría de hotel"
                    value="{{ old('qualification', $hotels->qualification ?? '') }}">
                @error('qualification')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Hotel
        </button>
    </div>
</div>
