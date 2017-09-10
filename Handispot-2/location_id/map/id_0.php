<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="/Handispot---Webapp-master/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Handispot---Webapp-master/css/style.css" rel="stylesheet">

    <title>Nørreport 22</title>
    <style media="screen">

    </style>

</head>
<body>

  <header>
    <a href="../0.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Return</a>
  </header>

  <main class="mainGPS">
    <div id="map"></div>
    <div style="background:#fff" id="nav-panel"></div>
  </main>



<script>

  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "/Handispot-2/parking_data.json", true);
  xmlhttp.send();

  xmlhttp.onload = function(responseText, func) {
  if (this.readyState == 4 && this.status == 200) {
    var  obj = JSON.parse(this.responseText);

    var destY =	obj.features[0].geometry.coordinates[0][0][0];
    var destX =	obj.features[0].geometry.coordinates[0][0][1];


    //gps position
    navigator.geolocation.getCurrentPosition(initMap, calculateAndDisplayRoute);

    //destination position
    function initMap(position) {

      //latitude and longitude from gps
      var x =	position.coords.latitude;
      var y = position.coords.longitude;

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
      directionsDisplay.setPanel(document.getElementById('nav-panel'));

      calculateAndDisplayRoute(directionsService, directionsDisplay, x, y);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay, x, y) {

        //calculate settings
        directionsService.route({
          origin: {lat: x, lng: y},
          destination: {lat: destX, lng: destY},
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
    }
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpKllE-UyULtzP8Q_f01yxNqnLTiQa1rs"></script>
</body>
</html>
