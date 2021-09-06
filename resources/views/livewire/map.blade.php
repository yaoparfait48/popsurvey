<div>
    <div id="map"></div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiYmFzc2lyYSIsImEiOiJja3Q3ZnQ2ODgwcno2Mm9yd2o2MjJrMGxnIn0.Ro21I2cW_NZWJVMr1w6QQw';
      const map = new mapboxgl.Map({
      container: 'map', // container ID
      style: 'mapbox://styles/mapbox/satellite-v9', // style URL
      center: [{{ $longitude }}, {{ $latitude }}], // starting position [lng, lat]
      zoom: 9 // starting zoom
      });

 
// Create a default Marker, colored black, rotated 45 degrees.
    const marker2 = new mapboxgl.Marker({ color: 'blue', rotation: 45 })
    .setLngLat([{{ $longitude }}, {{ $latitude }}])
    .addTo(map);
        </script>
</div>
