<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with </title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 40%;
        width: 100%;
        float: none;
        overflow: auto;
      }
      #map {
        height: 60%;
        width: 100%
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
    </style>
  </head>
  <body>

  <div id="map"></div>
  <div id="right-panel"></div>

<script>
    //destination position
    var destLat = 51,
        destLng = 21.1888320;

    //gps position
    navigator.geolocation.getCurrentPosition(initMap, calculateAndDisplayRoute);

      function initMap(position) {

        //latitude and longitude from gps
        var x =	position.coords.latitude,
            y = position.coords.longitude;

        //calculate direction
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;

        //make the map
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: x, lng: y}
        });

        //display direction panel
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        calculateAndDisplayRoute(directionsService, directionsDisplay, x, y);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay, x, y) {

        //calculate settings
        directionsService.route({
          origin: {lat: x, lng: y},
          destination: {lat: destLat, lng: destLng},
          travelMode: 'DRIVING'
        },

        //response status from maps api
        function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
  </script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpKllE-UyULtzP8Q_f01yxNqnLTiQa1rs&callback=initMap"></script>
</body>
</html>
