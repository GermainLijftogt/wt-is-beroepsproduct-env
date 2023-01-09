<?php
require_once 'db_connectie.php';
global $verbinding;

$psg = $_SESSION['psgnummer'];

$query = 'select * from Passagier where passagiernummer = ?';
$media = $verbinding->prepare($query);
$media->execute([$psg]);
$row = $media->fetch();

$psgnummer = $row['passagiernummer'];
$naam = $row['naam'];
$vlucht = $row['vluchtnummer'];
$geslacht = $row['geslacht'];
$balie = $row['balienummer'];
$stoel = $row['stoel'];
$inchecktijdstip = $row['inchecktijdstip'];
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Passagierdetail</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>
        <h1>Daan de Wit:</h1>
        <div class="psginfo">
            <div class="psgdetail">
                <p>Passagiernummer:</p>
                <p>Vluchtnummer:</p>
                <p>Geslacht:</p>
                <p>Balienummer:</p>
                <p>Stoel:</p>
                <p>Inchecktijdstip:</p>
            </div>
            <div class="info">
                <p>123456</p>
                <p>123456</p>
                <p>Man</p>
                <p>4</p>
                <p>24C</p>
                <p>21 November 2022 om 13:56</p>
            </div>
        </div>
        <div>
            <a href="bagageinchecken.html" class="incheck">Klik hier om in te checken</a>
        </div>
        <article class="vluchtinfo">
            <h2>Vluchtinformatie:</h2>
            <p>Vluchtnummer 123456 gaat naar het mooie Dubai.</p>
            <p>Er wordt gevlogen met KLM.</p>
            <p>Er worden snacks en drankjes verzorgd in het vliegtuig</p>
            <img src="Images/klm.jpg" alt="vliegtuig van KLM" height="183" width="275">
        </article>
        <footer>
            <a href="privacymedewerker.html">Privacyverklaring</a>
        </footer>
    </body>
</html>