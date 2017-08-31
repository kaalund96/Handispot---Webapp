<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="./img/logo.png">
        </header>
        <main id="main-index">
            <button>Quick search</button>
            <article class="box">    
                <p>Radius in km</p>
                <img src="./img/left-arrow.png" id="down" onclick="modify_qty(-1)">
                <input id="qty" value="5" />
                <img src="./img/right-arrow.png"id="up" onclick="modify_qty(1)">
            </article>
        </main>
        <footer>
            <a href="search.php">Normal Search</a>
        </footer>
        <script src="./js/counter.js"></script>
    </body>
</html>
