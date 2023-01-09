<?php
require_once 'db_connectie.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vlucht aanmaken</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>

        <h1>Omboeken passagier</h1>
        <p>Dit is voor vlucht <?php echo '11111'?></p>
        <div class="form">
            <form action="medewerker.html">
            <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

                <label for="vluchtnummer">Oud vluchtnummer:</label>
                <input id="vluchtnummer" placeholder="Bijvoorbeeld: 111" type="number" name="vluchtnummer" required>

                <label for="psgnummer">Passagiernummer: </label>
                <input id="psgnummer" placeholder="123456" type="number" name="psgnummer" required>

                <label for="omboekdatum">Nieuwe datum:</label>
                <input type="date" id="omboekdatum" name="omboekdatum" required>

                

                <input type="submit" value="Omboeken">
            </form>
        </div>
        <footer class="footer">
            <a href="privacymedewerker.php">Privacyverklaring</a>
        </footer>
    </body>
</html>