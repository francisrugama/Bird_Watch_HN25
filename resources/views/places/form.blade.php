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

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Buscar ubicación</label>
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control form-control-alternative" 
                           placeholder="Ej: Estelí, Nicaragua, Parque Central, Universidad">
                    <div class="input-group-append">
                        <button type="button" id="search-button" class="btn btn-primary">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
                <small class="form-text text-muted">Busca lugares en Estelí y alrededores</small>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="btn-group" role="group">
                <button type="button" id="btn-route" class="btn btn-info">
                    <i class="fas fa-route"></i> Indicaciones
                </button>
                <button type="button" id="btn-clear-route" class="btn btn-warning">
                    <i class="fas fa-times"></i> Limpiar Ruta
                </button>
                <button type="button" id="btn-current-location" class="btn btn-success">
                    <i class="fas fa-location-arrow"></i> Mi Ubicación
                </button>
                <button type="button" id="btn-toggle-satellite" class="btn btn-secondary">
                    <i class="fas fa-satellite"></i> Vista Satélite
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Selecciona la ubicación en el mapa</label>
                <div id="map" style="height: 500px; width: 100%; border: 1px solid #ccc; border-radius: 4px; background-color: #f8f9fa;"></div>
                <small class="form-text text-muted">
                    Haz clic en el mapa para establecer la ubicación o usa la barra de búsqueda
                </small>
                <div id="map-status" class="mt-2"></div>
            </div>
        </div>
    </div>

    <div class="row" id="route-panel">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"><i class="fas fa-directions"></i> Indicaciones de Ruta</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Punto de partida</label>
                                <input type="text" id="route-from" class="form-control" placeholder="Ej: Parque Central Estelí, Universidad...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Destino</label>
                                <input type="text" id="route-to" class="form-control" 
                                       value="{{ $places->name ? $places->name . ' - ' . $places->address : 'Ubicación seleccionada' }}" readonly>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn-calculate-route" class="btn btn-primary">
                        <i class="fas fa-calculator"></i> Calcular Ruta
                    </button>
                    <button type="button" id="btn-close-route" class="btn btn-outline-secondary">
                        <i class="fas fa-times"></i> Cerrar
                    </button>
                    <div id="route-instructions" class="mt-3" style="max-height: 200px; overflow-y: auto;"></div>
                </div>
            </div>
        </div>
    </div>

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

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

<script>
window.addEventListener('error', function(e) {
    if (e.message.includes('exampleFormControlSelect2')) {
        console.log('⚠️ Error de otro script ignorado');
        e.preventDefault();
        return true;
    }
});

var map, marker, routingControl;
var currentLayer = 'osm';
var baseLayers = {};

document.addEventListener('DOMContentLoaded', function() {
    console.log('🗺️ Iniciando carga del mapa de Estelí...');
    setTimeout(function() {
        initializeMap();
        setupEventListeners();
        document.getElementById('route-panel').style.display = 'none';
    }, 100);
});

function initializeMap() {
    try {
        console.log('🔧 Inicializando mapa de Estelí...');
        if (typeof L === 'undefined') {
            throw new Error('Leaflet no se cargó correctamente');
        }
        console.log('✅ Leaflet cargado:', L.version);

        var defaultLat = {{ old('latitude', $places->latitude ?? '13.0917') }};
        var defaultLng = {{ old('longitude', $places->longitude ?? '-86.3539') }};

        map = L.map('map', {
            preferCanvas: true,
            zoomControl: true
        }).setView([defaultLat, defaultLng], 14);

        console.log('✅ Mapa de Estelí creado');

        var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        });

        var osmHotLayer = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team',
            maxZoom: 19
        });

        var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
            maxZoom: 19
        });

        var topographicLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data: &copy; OpenStreetMap contributors, SRTM | Map style: &copy; OpenTopoMap',
            maxZoom: 17
        });

        osmLayer.addTo(map);

        baseLayers = {
            'Mapa Estándar': osmLayer,
            'Mapa Hot': osmHotLayer,
            'Vista Satélite': satelliteLayer,
            'Mapa Topográfico': topographicLayer
        };

        L.control.layers(baseLayers).addTo(map);

        console.log('✅ Múltiples capas de mapa agregadas');

        marker = null;

        if (defaultLat && defaultLng) {
            marker = L.marker([defaultLat, defaultLng]).addTo(map)
                .bindPopup('{{ $places->name ?: "Ubicación seleccionada" }}')
                .openPopup();
            console.log('✅ Marcador inicial agregado');
        }

        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            console.log('📍 Coordenadas seleccionadas:', lat, lng);

            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }

            var placeName = document.getElementById('name').value || 'Ubicación seleccionada';
            document.getElementById('route-to').value = placeName;
        });

        setTimeout(function() {
            map.invalidateSize();
            console.log('✅ Mapa redimensionado');
        }, 500);

        document.getElementById('map-status').innerHTML = 
            '<div class="alert alert-success">✅ Mapa de Estelí cargado - Haz clic para seleccionar ubicación</div>';

        console.log('🎉 ¡Mapa de Estelí completamente cargado!');

    } catch (error) {
        console.error('❌ Error al cargar el mapa:', error);
        document.getElementById('map-status').innerHTML = 
            '<div class="alert alert-danger">❌ Error: ' + error.message + '</div>';
    }
}

function setupEventListeners() {
    document.getElementById('search-button').addEventListener('click', searchLocation);
    document.getElementById('search-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') searchLocation();
    });

    document.getElementById('btn-route').addEventListener('click', toggleRoutePanel);
    document.getElementById('btn-clear-route').addEventListener('click', clearRoute);
    document.getElementById('btn-calculate-route').addEventListener('click', calculateRoute);
    document.getElementById('btn-close-route').addEventListener('click', function() {
        document.getElementById('route-panel').style.display = 'none';
    });

    document.getElementById('btn-current-location').addEventListener('click', getCurrentLocation);

    document.getElementById('btn-toggle-satellite').addEventListener('click', toggleSatelliteView);
}

function toggleSatelliteView() {
    var btn = document.getElementById('btn-toggle-satellite');
    if (currentLayer === 'osm') {
        map.removeLayer(baseLayers['Mapa Estándar']);
        baseLayers['Vista Satélite'].addTo(map);
        currentLayer = 'satellite';
        btn.innerHTML = '<i class="fas fa-map"></i> Vista Mapa';
        btn.classList.remove('btn-secondary');
        btn.classList.add('btn-info');
    } else {
        map.removeLayer(baseLayers['Vista Satélite']);
        baseLayers['Mapa Estándar'].addTo(map);
        currentLayer = 'osm';
        btn.innerHTML = '<i class="fas fa-satellite"></i> Vista Satélite';
        btn.classList.remove('btn-info');
        btn.classList.add('btn-secondary');
    }
}

function toggleRoutePanel() {
    var panel = document.getElementById('route-panel');
    if (panel.style.display === 'none') {
        panel.style.display = 'block';
        document.getElementById('btn-route').classList.add('active');

        var placeName = document.getElementById('name').value;
        var placeAddress = document.getElementById('address').value;
        if (placeName) {
            document.getElementById('route-to').value = placeName + (placeAddress ? ' - ' + placeAddress : '');
        }
    } else {
        panel.style.display = 'none';
        document.getElementById('btn-route').classList.remove('active');
        clearRoute();
    }
}

function searchLocation() {
    var query = document.getElementById('search-input').value;
    if (!query) {
        alert('Por favor, ingresa un lugar para buscar');
        return;
    }

    var searchQuery = query.includes('Estelí') ? query : query + ', Estelí, Nicaragua';

    document.getElementById('map-status').innerHTML = 
        '<div class="alert alert-info">🔍 Buscando: ' + query + '</div>';

    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(searchQuery)}&limit=5`)
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
                var result = data[0];
                var lat = parseFloat(result.lat);
                var lon = parseFloat(result.lon);
                var displayName = result.display_name;

                map.setView([lat, lon], 16);

                if (marker) {
                    marker.setLatLng([lat, lon]);
                } else {
                    marker = L.marker([lat, lon]).addTo(map);
                }

                document.getElementById('latitude').value = lat.toFixed(6);
                document.getElementById('longitude').value = lon.toFixed(6);

                document.getElementById('map-status').innerHTML = 
                    '<div class="alert alert-success">✅ Ubicación encontrada: ' + displayName + '</div>';

                if (!document.getElementById('address').value) {
                    document.getElementById('address').value = displayName.split(',')[0];
                }

                if (!document.getElementById('name').value) {
                    var suggestedName = displayName.split(',')[0];
                    document.getElementById('name').value = suggestedName;
                }

            } else {
                document.getElementById('map-status').innerHTML = 
                    '<div class="alert alert-warning">⚠️ Ubicación no encontrada. Intenta con otros términos.</div>';
            }
        })
        .catch(error => {
            console.error('Error en la búsqueda:', error);
            document.getElementById('map-status').innerHTML = 
                '<div class="alert alert-danger">❌ Error en la búsqueda: ' + error.message + '</div>';
        });
}

function calculateRoute() {
    var from = document.getElementById('route-from').value;
    var to = document.getElementById('route-to').value;

    if (!from) {
        alert('Por favor, ingresa un punto de partida');
        return;
    }

    if (!marker) {
        alert('Primero selecciona una ubicación en el mapa haciendo clic');
        return;
    }

    document.getElementById('map-status').innerHTML = 
        '<div class="alert alert-info">🧭 Calculando ruta...</div>';

    document.getElementById('route-instructions').innerHTML = 
        '<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Calculando ruta...</div>';

    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(from + ', Estelí, Nicaragua')}&limit=1`)
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
                var startLat = parseFloat(data[0].lat);
                var startLng = parseFloat(data[0].lon);

                var endLat = marker.getLatLng().lat;
                var endLng = marker.getLatLng().lng;

                if (routingControl) {
                    map.removeControl(routingControl);
                }

                routingControl = L.Routing.control({
                    waypoints: [
                        L.latLng(startLat, startLng),
                        L.latLng(endLat, endLng)
                    ],
                    router: L.Routing.osrmv1({
                        serviceUrl: 'https://router.project-osrm.org/route/v1'
                    }),
                    routeWhileDragging: false,
                    showAlternatives: false,
                    show: false,
                    lineOptions: {
                        styles: [{color: 'blue', opacity: 0.6, weight: 5}]
                    }
                }).addTo(map);

                routingControl.on('routesfound', function(e) {
                    var routes = e.routes;
                    var instructions = '';

                    if (routes && routes[0]) {
                        var route = routes[0];
                        instructions = '<h6>Instrucciones de la ruta:</h6><ol>';

                        route.instructions.forEach(function(instruction) {
                            var distance = instruction.distance > 1000 ? 
                                (instruction.distance / 1000).toFixed(2) + ' km' : 
                                instruction.distance + ' m';
                            instructions += '<li>' + instruction.text + ' <small class="text-muted">(' + distance + ')</small></li>';
                        });

                        instructions += '</ol>';
                        instructions += '<div class="alert alert-success mt-2">';
                        instructions += '<strong>Distancia total: ' + (route.summary.totalDistance / 1000).toFixed(2) + ' km</strong><br>';
                        instructions += '<strong>Tiempo estimado: ' + (route.summary.totalTime / 60).toFixed(0) + ' minutos</strong>';
                        instructions += '</div>';
                    }

                    document.getElementById('route-instructions').innerHTML = instructions;
                    document.getElementById('map-status').innerHTML = 
                        '<div class="alert alert-success">✅ Ruta calculada exitosamente</div>';
                });

            } else {
                document.getElementById('map-status').innerHTML = 
                    '<div class="alert alert-warning">⚠️ No se pudo encontrar el punto de partida</div>';
                document.getElementById('route-instructions').innerHTML = 
                    '<div class="alert alert-warning">No se pudo encontrar el punto de partida. Verifica la dirección.</div>';
            }
        })
        .catch(error => {
            console.error('Error calculando ruta:', error);
            document.getElementById('map-status').innerHTML = 
                '<div class="alert alert-danger">❌ Error calculando ruta: ' + error.message + '</div>';
            document.getElementById('route-instructions').innerHTML = 
                '<div class="alert alert-danger">Error al calcular la ruta. Intenta nuevamente.</div>';
        });
}

function clearRoute() {
    if (routingControl) {
        map.removeControl(routingControl);
        routingControl = null;
    }
    document.getElementById('route-instructions').innerHTML = '';
    document.getElementById('route-from').value = '';
}

function getCurrentLocation() {
    if (!navigator.geolocation) {
        alert('La geolocalización no es soportada por tu navegador');
        return;
    }

    document.getElementById('map-status').innerHTML = 
        '<div class="alert alert-info">📍 Obteniendo tu ubicación actual...</div>';

    navigator.geolocation.getCurrentPosition(
        function(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            map.setView([lat, lng], 16);

            if (marker) {
                marker.setLatLng([lat, lng]);
            } else {
                marker = L.marker([lat, lng]).addTo(map);
            }

            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);

            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
                .then(response => response.json())
                .then(data => {
                    var address = data.display_name || 'Ubicación actual';
                    document.getElementById('map-status').innerHTML = 
                        '<div class="alert alert-success">✅ Ubicación actual: ' + address + '</div>';

                    if (!document.getElementById('address').value) {
                        document.getElementById('address').value = address.split(',')[0];
                    }
                });
        },
        function(error) {
            var errorMessage = 'Error obteniendo ubicación: ';
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    errorMessage += 'Permiso denegado';
                    break;
                case error.POSITION_UNAVAILABLE:
                    errorMessage += 'Posición no disponible';
                    break;
                case error.TIMEOUT:
                    errorMessage += 'Tiempo de espera agotado';
                    break;
                default:
                    errorMessage += 'Error desconocido';
            }
            document.getElementById('map-status').innerHTML = 
                '<div class="alert alert-danger">❌ ' + errorMessage + '</div>';
        }
    );
}
</script>
