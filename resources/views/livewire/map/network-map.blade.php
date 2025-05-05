<div>
    <div class="bg-neutral-900 rounded-lg p-3">
        <p class="mb-4">Network Map</p>
        <div id="map" class="map-container rounded-lg" style="width: 100%; height: 540px;"></div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        const apiKey = '{{config('app.maptiler_key')}}'; 
        maptilersdk.config.apiKey = apiKey;

        const map = new maptilersdk.Map({
            container: 'map',
            style: maptilersdk.MapStyle.DATAVIZ.LIGHT,
            center: [-74.0060, 40.7128], // Default center
            zoom: 1
        });

        let markers = [];

        function updateMarkers(locations) {
            markers.forEach(marker => marker.remove()); // Clear old markers
            markers = locations.map(loc => {
                const marker = new maptilersdk.Marker().setLngLat([loc.lng, loc.lat]).addTo(map);
                return marker;
            });
        }

        updateMarkers(@json($locations));

        window.addEventListener('updateMap', (event) => {
            updateMarkers(event.detail.locations);
        });
    });
</script>