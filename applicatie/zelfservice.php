<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once '../applicatie/business/bagageFunctie.php';

$psgnummer = $_GET['psgnummer'];
$naam = Bagageincheckenquery($psgnummer, $verbinding);
?>

        <?=
        getHeader("Zelfservice");
        ?>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>Hier kan<?= $naam?> inchecken</p>
        </div>
        <div class="form">
        <form action="begin.php">
            
                <label for="typebagage">Type Bagage:</label>
                <select name="typebagage" id="typebagage">
                    <option value="handbagage">Handbagage</option>
                    <option value="ruimbagage">Ruimbagage</option>
                </select>

                <label for="kilo">Hoeveel Kilogram:</label>
                <input id="kilo" type="number" name="gewicht"  required>
                
                <input type="submit" value="Inchecken">
            </form>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>