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

        <h1 class="hvluchtmkn">Vlucht aanmaken</h1>
        <div class="form">
            <form action="medewerker.html">
            <!-- bij alle forms moet nog: method="post". Dit heb ik gedaan zodat ik niet een speciale button moet maken maar zodat ik gewoon die uit de form kan gebruiken, anders kreeg ik foutmelding -->

                <label for="vluchtnummer">Vluchtnummer:</label>
                <input id="vluchtnummer" placeholder="Bijvoorbeeld: 111" type="number" name="vluchtnummer" required>

                <label for="bestemming">Bestemming:</label>
                <input id="bestemming" placeholder="Bijvoorbeeld: London" type="text" name="bestemming" required>

                <label for="gatecode">Gatecode:</label>
                <input id="gatecode" placeholder="Bijvoorbeeld: 1" type="number" name="gatecode" required>

                <label for="maxntl">Max Aantal</label>
                <input id="maxntl" placeholder="bijvoorbeeld: 111" type="number" name="maxntl" required>

                <label for="maxkgpp">Maximale gewicht van de bagage per persoon (in kg):</label>
                <input id="maxkgpp" placeholder="bijvoorbeeld: 11" type="number" name="maxkgpp" required>

                <label for="maxtotkg">Maximale totaalgewicht(in kg):</label>
                <input id="maxtotkg" placeholder="Bijvoorbeeld: 1111" type="number" name="maxtotkg" required>

                <label for="datum">Vertrekdatum:</label>
                <input id="datum" type="date" name="datum" required>

                <label for="tijd">Vertrektijd:</label>
                <input id="tijd" type="time" name="tijd" required>

                <label for="maatschappij">Maatschappij:</label>
                <input id="maatschappij" placeholder="Bijvoobeeld: RyanAir" type="text" name="maatschappij" required>

                <input type="submit" value="Vlucht aanmaken">
            </form>
        </div>

        <footer class="footer">
            <a href="privacymedewerker.html">Privacyverklaring</a>
        </footer>
    </body>
</html>