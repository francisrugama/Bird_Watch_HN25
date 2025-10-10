<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">name</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar name"
                    value="{{ old('name', $tours->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">descripcion</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="ingresar descripcion"
                    value="{{ old('description', $tours->description) }}">
            </div>
        </div>
    </div>


    



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_activity">tipo de actividad</label>
                <input type="number" id="type_activity" name="type_activity" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de actividad"
                    value="{{ old('type_activity', $tour->type_activity) }}">
            </div>
        </div>
    </div>










<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="duration">Duration</label>
                <input type="text" id="duration" name="duration" class="form-control form-control-alternative"
                    placeholder="Ingresar duration"
                    value="{{ old('duration', $tour->duration) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="location">Localidad</label>
                <input type="text" id="location" name="location" class="form-control form-control-alternative"
                    placeholder="Ingresar location"
                    value="{{ old('location', $tour->location) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_transport">Tipo de transporte</label>
                <input type="text" id="type_transport" name="type_transport" class="form-control form-control-alternative"
                    placeholder="Ingresar tipo de transporte"
                    value="{{ old('type_transport', $tours->type_transport) }}">
            </div>
        </div>
    </div>


    



<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tour_language">lenguaje del tour</label>
                <input type="text" id="tour_language" name="tour_language" class="form-control form-control-alternative"
                    placeholder="Ingresar lenguaje del tour"
                    value="{{ old('tour_language', $tours->tour_language) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="max_capacity">capacidad máxima</label>
                <input type="text" id="max_capacity" name="max_capacity" class="form-control form-control-alternative"
                    placeholder="Ingresar capacidad máxima"
                    value="{{ old('max_capacity', $tours->max_capacity) }}">
            </div>
        </div>
    </div>



<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="id_reservations">id de reservacion</label>
                <input type="text" id="id_reservations" name="id_reservations" class="form-control form-control-alternative"
                    placeholder="Ingresar id de reservacion"
                    value="{{ old('id_reservations', $tour->id_reservations) }}">
            </div>
        </div>
    </div>






<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="id_guides">id del guia</label>
                <input type="text" id="id_guides" name="id_guides" class="form-control form-control-alternative"
                    placeholder="Ingresar id del guia"
                    value="{{ old('id_guides', $tour->id_guides) }}">
            </div>
        </div>
    </div>




<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="id_categories">id de categoria</label>
                <input type="text" id="id_categories" name="id_categories" class="form-control form-control-alternative"
                    placeholder="Ingresar id de categoria"
                    value="{{ old('id_categories', $tour->id_categories) }}">
            </div>
        </div>
    </div>







<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="id_admin">id del administrador</label>
                <input type="text" id="id_admin" name="id_admin" class="form-control form-control-alternative"
                    placeholder="Ingresar id del administrador"
                    value="{{ old('id_admin', $tour->id_admin) }}">
            </div>
        </div>
    </div>













</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Rceorrido
        </button>
    </div>
</div>
