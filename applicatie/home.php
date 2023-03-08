<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/top6Functie.php';
global $verbinding;


?>
        <?=
            getHeader("Home");
        ?>

        <article>
            <h1>Home</h1>
            <p>Op dit moment bevindt u zich op de Homepagina van GelreCheckin</p>
        </article>
        <h2>Komende vluchten:</h2>
        <div class="homevluchten">
            <?=
                returnVlucht($verbinding);
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