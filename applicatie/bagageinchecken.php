<?php
require_once 'db_connectie.php';
require_once 'functies/headermedewerker.php';
require_once 'functiesfooter.php';
require_once 'functies/Bagageinchecken.php';
global $verbinding;
$psg = $_SESSION['psgnummer'];

$naam = Bagageincheckenquery($psg, $verbinding);



?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inchecken</title>
        <link rel="stylesheet" href="/css/stylesheet.css">
    </head>
    <body>
        <?=
            getHeader();
        ?>

        <h1>Bagage van <?php echo $naam?>  inchecken</h1>
        <h1>Passagiernummer: <?php echo $psg ?></h1>

        <form method= "post">

            <label for="typebagage">Type Bagage:</label>
            <select name="typebagage" id="typebagage">
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="kilo">Hoeveel Kilogram:</label>
            <input id="kilo" type="number" name="gewicht"  required>
                        
            <input type="submit" value="Bagage inchecken">
        </form>
        <?=
            getFooter();
        ?>
    </body>
</html>