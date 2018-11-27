<?php
session_start();
$comienzo = $_POST["comienzo"];
$fin = $_POST["fin"];

//print_r($_POST);

$urlComienzo = "http://www.mapquestapi.com/geocoding/v1/address?key=notToday&location=$comienzo";
$urlFin= "http://www.mapquestapi.com/geocoding/v1/address?key=notToday&location=$fin";

$jsonComienzo = file_get_contents($urlComienzo);
$jsonFin = file_get_contents($urlFin);
$arrayComienzo = json_decode($jsonComienzo, true);
$arrayFin = json_decode($jsonFin, true);


$resComienzo = $arrayComienzo["results"][0]["locations"][0]["latLng"];
$resFin = $arrayFin["results"][0]["locations"][0]["latLng"];


/*echo "<pre>";
print_r($resComienzo);
echo "</pre>";
echo "<pre>";
print_r($resFin);
echo "</pre>";*/
$xComienzo = $resComienzo["lat"];
$yComienzo = $resComienzo["lng"];
/*
print_r($xComienzo);
print_r($yComienzo);
*/
$xFin = $resFin["lat"];
$yFin = $resFin["lng"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />
  <title>Document</title>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }

    .marker {
      background-image: url('mapbox-icon.png');
      background-size: cover;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      cursor: pointer;
    }
  </style>

</head>
<body>
  <div id='map'></div>
   <!-- <input type="text" type="hidden" id="primerLugar" value= //?php echo "$comienzo" ?>> -->

  <script>
  mapboxgl.accessToken = '';
   var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v9',
    center: [<?php echo "$yComienzo,$xComienzo" ?>],
    zoom: 12
  }); 
  
  var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [<?php echo "$yComienzo,$xComienzo" ?>]
    },
    properties: {
      title: 'Mapbox',
      description: 'Washington, D.C.'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [<?php echo "$yFin,$xFin" ?>]
    },
    properties: {
      title: 'Mapbox',
      description: 'San Francisco, California'
    }
  }]
  }; 
  
// add markers to map
geojson.features.forEach(function(marker) {

// create a HTML element for each feature
var el = document.createElement('div');
el.className = 'marker';

// make a marker for each feature and add to the map
new mapboxgl.Marker(el)
.setLngLat(marker.geometry.coordinates)
.addTo(map);
});

  </script>
</body>
</html>