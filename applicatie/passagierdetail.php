<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/psgDetailOphalen.php';
require_once 'business/incheckIf.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();
global $verbinding;

$psg = $_SESSION['psgnummer'];


?>
        <?=
        getHeader("Passagierdetail");
        ?>
        <h1><?= nameOphalen($verbinding, $psg); ?>:</h1>
        <div class="psginfo">
            <div class="psgdetail">
                <p>Passagiernummer:</p>
                <p>Vluchtnummer:</p>
                <p>Geslacht:</p>
                <p>Balienummer:</p>
                <p>Stoel:</p>
                <p>Inchecktijdstip:</p>
            </div>
            <div class="info">
                <?=
                psgDetailsOphalen($verbinding,$psg);
                ?>
            </div>
        </div>
        <?=
            checkIncheck($verbinding, $psg);
        ?>
        <article class="vluchtinfo">
            <?= vluchtInfoOphalen($verbinding,$psg); ?>
        </article>
        <?=
        getFooter();
        ?>
    </body>
</html>