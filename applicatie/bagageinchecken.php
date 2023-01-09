<?php
require_once 'db_connectie.php';
global $verbinding;

$naam = 'Daan';


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
        <?php
        require_once 'headermedewerker.php';
        ?>

        <h1>Bagage van <?php echo $naam?>  inchecken</h1>

        <form action="medewerker.php">
        <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

            <label for="psgnummer">Passagiernummer:</label>
            <input id="psgnummer" placeholder="bijvoorbeeld: 123456" type="number" name="psgnummer" required>

            <label for="hvlbagage">Hoeveel bagage:</label>
            <select name="hvlbagage" id="hvlbagage">
                <option value="1">1 Tas</option>
                <option value="2">2 Tassen</option>
                <option value="3">3 Tassen</option>
                <option value="4">4 Tassen</option>
            </select>

            <label for="typebagage">Type Bagage:</label>
            <select name="typebagage" id="typebagage">
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="typebagage1">Type Bagage:</label>
            <select name="typebagage1" id="typebagage1">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="typebagage2">Type Bagage:</label>
            <select name="typebagage2" id="typebagage2">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>
            
            <label for="typebagage3">Type Bagage:</label>
            <select name="typebagage3" id="typebagage3">
                <option value="niks">niks</option>
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <input type="submit" value="Bagage inchecken">
        </form>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>