<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/vluchtLatenZien.php';

global $verbinding;


?>


        <?=
            getHeader("Vlucht");
        ?>

        <article class="vluchten">
            <?=laatVluchtZien($verbinding);?>
        </article>
        
        <?=
            getFooter();        
        ?>
    </body>
</html>