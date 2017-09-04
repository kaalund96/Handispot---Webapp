<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <header id="header-search">
        <a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <a href="index.php" class="back-text">Home</a>
    </header>
    <main id="main-search">
        <p>Max price pr. hour</p>
        <select name="price" id="price">
            <option value="0">0kr</option>
            <option value="10">10kr</option>
            <option value="20">20kr</option>
            <option value="30">30kr</option>
            <option value="40">40kr</option>
            <option value="50">50</option>
            <option value="all">All</option>
        </select>
        <p> Max range</p>
        <select name="range" id="range">
            <option value="1">1km</option>
            <option value="2">2km</option>
            <option value="3">3km</option>
            <option value="4">4km</option>
            <option value="5">5km</option>
            <option value="10">10km</option>
            <option value="all">All</option>
        </select>
            <input type="text" placeholder="Search location" name="location">
    </main>
    <footer>
        <button>Search</button>
    </footer>
    </body>
</html>
