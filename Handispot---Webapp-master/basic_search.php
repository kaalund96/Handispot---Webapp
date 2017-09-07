<!doctype html>
<html>
<head>
<meta charset="UTF-8">

</head>

<body>

  <h2>Søg lokation</h2>

  <input type="text" id="searchBar" placeholder="Search for names.." title="Type in a name">

  <ul id="UL">

    <li><a href="#">Aarhus</a></li>
    <li><a href="#">Odense</a></li>
    <li><a href="#">København</a></li>
    <li><a href="#">Vejle</a></li>
    <li><a href="#">Aalborg</a></li>

  </ul>

  <script>

  var input = document.getElementById("searchBar");

  input.onkeyup = function(){
    startSearch();
  };

  function startSearch() {
      var filter,
          ul,
          li,
          a,
          i;

      filter = input.value.toUpperCase();

      ul = document.getElementById("UL");

      li = ul.getElementsByTagName("li");

      for (i = 0; i < li.length; i++) {

          a = li[i].getElementsByTagName("a")[0];

          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {

              li[i].style.display = "block";

          } else {

              li[i].style.display = "none";

          }
      }
  }
  </script>
</body>
</html>
