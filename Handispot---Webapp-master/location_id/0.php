<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>Nørreport</title>

  </head>
  <body>

    <header>
      <a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      <a href="../index.php">return</a>
    </header>

    <main id="specs">

    </main>
<footer>
      <a href="map/id_0.php">Start navigation</a>
</footer>


<script>

var specs = document.getElementById('specs');

xmlhttp = new XMLHttpRequest();

xmlhttp.open("GET", "../parking_data.json", true);
xmlhttp.overrideMimeType('charset=utf-8');
xmlhttp.send();

xmlhttp.onload = function() {

    var x = 0;
    var obj = JSON.parse(this.responseText);
    var title =	obj.features[x].properties.Vejnavn;
    var weekdays =	obj.features[x].properties.B_tidsrum_hverdage;
    var saturdays =	obj.features[x].properties.B_tidsrum_loerdage;
    var price = obj.features[x].properties.Pris;
    var handicapPrice = price.Handicap;
    var firstHour = price.første_time;
    var secondHour = price.anden_time;
    var after = price.derefter;
    console.log(obj);


    specs.innerHTML = "<h1>" + title + "</h1><br><p>Betalings tidsrum:<br> <br> Normalt: " + weekdays + "<br>Lørdage: " + saturdays + "</p>" +
    "<br><p>Pris:<br> <br>Handicapd: " + handicapPrice + "<br>First hour: " + firstHour + " kr. <br>Second hour: " + secondHour + " kr. <br>After that: " + after + " kr. </p>";

}


  </script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpKllE-UyULtzP8Q_f01yxNqnLTiQa1rs"></script>
</body>
</html>
