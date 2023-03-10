<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/medewerkerFunctie.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();
$passagier = $_SESSION['psg'];
?>

<!DOCTYPE html>

        <?= 
        getHeader("Home");        
        ?>
        <div class="medewerkerbtn">
            <?=
            medewerker($passagier);
            ?>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>