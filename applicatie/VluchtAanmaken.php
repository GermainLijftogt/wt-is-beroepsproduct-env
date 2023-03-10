<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/newVlucht.php';
require_once 'business/maxVluchtNr.php';
require_once 'business/getLuchthavens.php';
require_once 'business/getGatecode.php';
require_once 'business/getMaatschappij.php';
global $verbinding;

$nieuwvlucht = getMaxVluchtnr($verbinding);


$queryM = 'select maatschappijcode from Maatschappij';

newVlucht($verbinding, $nieuwvlucht);
?>


        <?=
        getHeader("Vlucht aanmaken");
        ?>

        <h1 class="hvluchtmkn">Vlucht aanmaken</h1>
        <div class="form">
            <form method="POST">

                <label for="bestemming">Bestemming:</label>
                <select name="bestemming" id="bestemming">
                    <?=
                       getLuchthavens($verbinding); 
                    ?>
                </select>
                <label for="gatecode">Gatecode:</label>
                <select name="gatecode" id="gatecode">
                    <?=
                        getGatecode($verbinding);
                    ?>
                </select>
                
                <label for="maxntl">Max Aantal</label>
                <input id="maxntl" placeholder="bijvoorbeeld: 111" type="number" name="maxntl" required>

                <label for="maxkgpp">Maximale gewicht van de bagage per persoon (in kg):</label>
                <input id="maxkgpp" placeholder="bijvoorbeeld: 11" type="number" name="maxkgpp" required>

                <label for="maxtotkg">Maximale totaalgewicht(in kg):</label>
                <input id="maxtotkg" placeholder="Bijvoorbeeld: 1111" type="number" name="maxtotkg" required>

                <label for="datum">Vertrekdatum:</label>
                <input id="datum" type="datetime-local" name="datum" required>

                <label for="maatschappij">Maatschappij:</label>
                <select name="maatschappij" id="maatschappij">
                    <?=
                    getMaatschappij($verbinding);
                    ?>
                
                <input type="submit" value="Vlucht aanmaken">
            </form>
        </div>

        <?=
        getFooter();
        ?>
    </body>
</html>