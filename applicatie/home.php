<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';
require_once 'functies/top6Functie.php';
global $verbinding;


?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?=
            getHeader();
        ?>

        <article>
            <h1>Home</h1>
            <p>Op dit moment bevindt u zich op de Homepagina van GelreCheckin</p>
        </article>
        <h2>Komende vluchten:</h2>
        <div class="homevluchten">
            <?=
                top6Vluchten($verbinding);
            ?>
        </div>
        <h2>bekende bestemmingen:</h2>
        <div class="homebestemmingen">
            <?=
                top6Bestemmingen($verbinding);
            ?>
        </div>
        <?=
            getFooter();
        ?>
    </body>
</html>