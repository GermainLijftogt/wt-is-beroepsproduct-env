<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/psgFunctie.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();
global $verbinding;

newPsg($verbinding);

?>

        <?=
        getHeader("Nieuwe Passagier");
        ?>

        <h1>Nieuwe passagier</h1>
        <div class="form">
        <form method="post" >

            <label for="name">Naam:</label>
            <input id="name" placeholder="bijvoorbeeld: Jan de Wit" type="text" name="name" required>

            <label for="geslacht">Geslacht:</label>
            <select name="geslacht" id="geslacht">
                <option value="M">Man</option>
                <option value="V">Vrouw</option>
                <option value="">Niks</option>
            </select>

            <label for="stoel">Stoel:</label>
            <select name="stoel" id="stoel">
                <?=
                    stoelen($verbinding);
                ?>
            </select>

            <input type="submit" value="Nieuwe passagier invullen">
        </form>
    </div>
        <?=
        getFooter();
        ?>
    </body>
</html>