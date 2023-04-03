<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/psgFunctie.php';
require_once 'business/omboekenFunctie.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();
global $verbinding;
$psgnummer = omboeken($verbinding);
?>
    <?=
    getHeader("VLucht aanmaken");
    ?>

        <h1>Omboeken passagier</h1>
        <p>Dit is voor passagier <?php echo $psgnummer;?></p>
        <div class="form">
            <form method="post">

                <label for="stoel">Stoel:</label>
                <select name="stoel" id="stoel">
                    <?=
                        stoelen($verbinding);
                    ?>
                </select>
                <input type="submit" value="Omboeken">
            </form>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>