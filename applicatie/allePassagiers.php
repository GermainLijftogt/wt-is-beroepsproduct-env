<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/laatPsgZien.php';
require_once 'business/checkMedewerker.php';
require_once 'business/vluchtnrCheck.php';
geenMedewerker();
global $verbinding;
$medewerker = checkMedewerker();
$vluchtnummer = getVluchtNr();
?>

        <?=
        getHeader("Passagiersoverzicht");
        ?>
        
        <h1>Passagieroverzicht</h1>
        <p>Hier kunt u alle passagiers van vlucht: <?= $vluchtnummer ?> inzien</p>
        <div style="overflow-x:auto;">
        <?=
        getPassagiers($verbinding);
        ?>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>