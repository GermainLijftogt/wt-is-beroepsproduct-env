<?php
require_once 'db_connectie.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vlucht</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>
        
        <article class="vluchten">
            <h1>Vluchtgegevens</h1>
            <p>Vluchtnummer 111</p>
            <p>Bestemming: Dubai</p>
            <p>Gate: 1</p>
            <p>plekken over: 15</p>
            <p>gewicht over: 90 kg</p>
            <p>Vertrektijd: 12:30</p>
            <p>Vliegmaatschappij: KLM</p>
            <a href="nieuwePassagier.php" class="newpsg">Nieuwe passagier invoeren</a>
            <a href="omboeken.php" class="newpsg">Passagier omboeken</a>
            <img src="Images/klm.jpg" alt="Vliegtuig van KLM">
        </article>
        
        <footer class="footer">
            <a href="privacymedewerker.html">Privacyverklaring</a>
        </footer>
    </body>
</html>