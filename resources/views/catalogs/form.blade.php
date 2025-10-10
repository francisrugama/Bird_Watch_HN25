<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" class="form-control"
                       placeholder="Ingresar título" value="{{ old('title', $catalogs->title ?? '') }}" required>
                @error('title')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control"
                          placeholder="Ingresar descripción">{{ old('description', $catalogs->description ?? '') }}</textarea>
                @error('description')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Imagen</label>

                @if(isset($catalogs) && $catalogs->image && file_exists(public_path($catalogs->image)))
                    <div class="mb-2">
                        <img src="{{ asset($catalogs->image) }}" alt="Imagen actual" style="max-width:200px; height:auto; border-radius:6px;">
                    </div>
                @endif

                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <small class="text-muted">Si subes una nueva imagen, reemplazará la actual.</small>
                @error('image')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

</div>
