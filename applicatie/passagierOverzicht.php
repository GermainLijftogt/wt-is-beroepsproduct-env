<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/laatPsgZien.php';
require_once 'business/checkMedewerker.php';
require_once 'business/vluchtnrCheck.php';
global $verbinding;
$medewerker = checkMedewerker();
?>

        <?=
        getHeader("Passagiersoverzicht");
        ?>
        
        <h1>Passagieroverzicht</h1>
        <form class= "searchbar" method="GET" action="passagierOverzicht.php">
            <input type="text" name="zoeken" placeholder="Zoeken"> 
            <input type="submit" value="Zoeken">
        </form>
        <div style="overflow-x:auto;">
        <?=
        getAllePassagiers($verbinding);
        ?>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>