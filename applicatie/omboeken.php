<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/psgFunctie.php';
require_once 'business/omboekenFunctie.php';
global $verbinding;
$vluchtnummer = omboeken($verbinding);
?>


        <?=
        getHeader("VLucht aanmaken");
        ?>

        <h1>Omboeken passagier</h1>
        <p>Dit is voor vlucht <?php echo $vluchtnummer;?></p>
        <div class="form">
            <form method="post">

                <label for="vluchtnummer">Nieuw vluchtnummer:</label>
                <input id="vluchtnummer" placeholder="Bijvoorbeeld: 111" type="number" name="vluchtnummer" required>

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