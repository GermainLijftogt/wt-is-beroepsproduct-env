<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/psgNummerCheck.php';
$psgnummer = checkPsgNummer();

?>

        <?=
        getHeader("Zelfservice");
        ?>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>hier kan u uzelf inchecken</p>
        </div>
        <div class="form">
        <form method="GET" action="zelfservice.php">

            <label for="psgnummer">Uw passagiersnummer:</label>
            <input id="psgnummer" placeholder="11111" type="number" name="psgnummer" required>
                
            <input type="submit" value="Verder">
        </form>
        <?=
        getFooter();
        ?>
    </body>
</html>