<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar Nombre"
                value="{{ old('name', $places->name)}}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresar dirección"
                value="{{ old('address', $places->address)}}">
                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <!-- Campos para coordenadas -->
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="latitude">Latitud</label>
                <input type="text" id="latitude" name="latitude" class="form-control form-control-alternative"
                placeholder="Latitud"
                value="{{ old('latitude', $places->latitude)}}">
                @error('latitude')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="longitude">Longitud</label>
                <input type="text" id="longitude" name="longitude" class="form-control form-control-alternative"
                placeholder="Longitud"
                value="{{ old('longitude', $places->longitude)}}">
                @error('longitude')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <!-- Mapa OpenStreetMap -->
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Selecciona la ubicación en el mapa</label>
                <div id="map" style="height: 400px; width: 100%; border: 1px solid #ccc; border-radius: 4px; background-color: #f8f9fa;"></div>
                <small class="form-text text-muted">Haz clic en el mapa para establecer la ubicación</small>
                <div id="map-status" class="mt-2"></div>
            </div>
        </div>
    </div>

    <!-- Resto de tus campos existentes -->
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="availability_schedule">Fecha de disponibilidad</label>
                <input type="date" id="availability_schedule" name="availability_schedule" class="form-control form-control-alternative"
                value="{{ old('availability_schedule', $places->availability_schedule)}}">
                @error('availability_schedule')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_reserve">Tipo de reserva</label>
                <input type="text" id="type_reserve" name="type_reserve" class="form-control form-control-alternative"
                placeholder="Tipo de reserva"
                value="{{ old('type_reserve', $places->type_reserve)}}">
                @error('type_reserve')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control form-control-alternative"
                placeholder="Descripción del lugar" rows="3">{{ old('description', $places->description)}}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tour_id">Tours</label>
                <select id="tour_id" name="tour_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar tour</option>
                    @foreach($tours as $tour)
                        <option value="{{ $tour->id }}" {{ old('tour_id', $places->tour_id) == $tour->id ? 'selected' : '' }}>
                            {{ $tour->name }}
                        </option>
                    @endforeach
                </select>
                @error('tour_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hotel_id">Hotel</label>
                <select id="hotel_id" name="hotel_id" class="form-control form-control-alternative">
                    <option value="">Seleccionar hotel</option>
                    @foreach($hotels as $hotel)
                        <option value="{{ $hotel->id }}" {{ old('hotel_id', $places->hotel_id) == $hotel->id ? 'selected' : '' }}>
                            {{ $hotel->name }}
                        </option>
                    @endforeach
                </select>
                @error('hotel_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <hr class="my-4"/>

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Lugar
            </button>
        </div>
    </div>
</div>

<!-- CARGAR LEAFLET CON MANEJO DE ERRORES -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
// Prevenir que otros errores detengan nuestro mapa
window.addEventListener('error', function(e) {
    if (e.message.includes('exampleFormControlSelect2')) {
        console.log('⚠️ Error de otro script ignorado:', e.message);
        e.preventDefault();
        return true;
    }
});

// Esperar a que TODO esté listo
document.addEventListener('DOMContentLoaded', function() {
    console.log('🗺️ Iniciando carga del mapa...');
    
    // Esperar un poco más para asegurar que Leaflet esté cargado
    setTimeout(function() {
        initializeMap();
    }, 100);
});

function initializeMap() {
    try {
        console.log('🔧 Inicializando mapa...');
        
        // Verificar que Leaflet esté cargado
        if (typeof L === 'undefined') {
            throw new Error('Leaflet no se cargó correctamente');
        }
        
        console.log('✅ Leaflet cargado:', L.version);
        
        // Coordenadas por defecto
        var defaultLat = {{ old('latitude', $places->latitude ?? '40.4168') }};
        var defaultLng = {{ old('longitude', $places->longitude ?? '-3.7038') }};
        
        // Crear el mapa
        var map = L.map('map', {
            preferCanvas: true // Mejor rendimiento
        }).setView([defaultLat, defaultLng], 13);
        
        console.log('✅ Mapa creado');
        
        // Agregar capa de OpenStreetMap
        var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);
        
        console.log('✅ Capa OpenStreetMap agregada');
        
        var marker = null;
        
        // Si hay coordenadas, agregar marcador
        if (defaultLat && defaultLng) {
            marker = L.marker([defaultLat, defaultLng]).addTo(map);
            console.log('✅ Marcador inicial agregado');
        }
        
        // Evento al hacer clic en el mapa
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            
            console.log('📍 Coordenadas seleccionadas:', lat, lng);
            
            // Actualizar campos de texto
            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);
            
            // Actualizar o crear marcador
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });
        
        // Forzar redimensionamiento del mapa
        setTimeout(function() {
            map.invalidateSize();
            console.log('✅ Mapa redimensionado');
        }, 500);
        
        document.getElementById('map-status').innerHTML = 
            '<div class="alert alert-success">✅ Mapa cargado - Haz clic para seleccionar ubicación</div>';
            
        console.log('🎉 ¡Mapa completamente cargado!');
        
    } catch (error) {
        console.error('❌ Error al cargar el mapa:', error);
        document.getElementById('map-status').innerHTML = 
            '<div class="alert alert-danger">❌ Error: ' + error.message + '</div>';
    }
}
</script>