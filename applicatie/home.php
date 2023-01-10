<?php
require_once 'db_connectie.php';
global $verbinding;

$queryV = 'select TOP(6) vluchtnummer, vertrektijd, gatecode, maatschappijcode
            from Vlucht
            where vertrektijd > SYSDATETIME()
            order by vertrektijd ASC';

$queryB = 'select TOP(6) bestemming, count(vluchtnummer) as aantal_vluchten
            from Vlucht
            group by bestemming
            order by aantal_vluchten DESC';

$dataV = $verbinding->query($queryV);
$dataB = $verbinding->query($queryB);





?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
            require_once 'headermedewerker.php';
        ?>

        <article>
            <h1>Home</h1>
            <p>Op dit moment bevindt u zich op de Homepagina van GelreCheckin</p>
        </article>
        <h2>Komende vluchten:</h2>
        <div class="homevluchten">
            <?php 
            while($rijV = $dataV->fetch()){
                $vluchtnummer = $rijV['vluchtnummer'];
                $vertrektijd = $rijV['vertrektijd'];
                $gatecode = $rijV['gatecode'];
                $maatschappijcode = $rijV['maatschappijcode'];
            
                echo '
                <div>
                    <img src="Images/'.$maatschappijcode.'.jpg" alt="foto van vliegtuig die op dit moment vertrekt">
                    <h3>Vluchtnummer:  '.$vluchtnummer.' </h3>
                    <h4>Vertrektijd: '.$vertrektijd.'</h4>
                    <h4>Gate: '.$gatecode.'</h4>
                </div>
                ';
            }
            ?>
        </div>
        <h2>bekende bestemmingen:</h2>
        <div class="homebestemmingen">
            <?php
            while($rijB = $dataB->fetch()){
                $bestemming = $rijB['bestemming'];
                $aantal_vluchten = $rijB['aantal_vluchten'];

                echo '
                <div>
                    <img src="Images/'.$bestemming.'.jpg" alt="foto van Bestemming">
                    <h3>'.$bestemming.'</h3>
                </div>
                ';
            }
            ?>
        </div>
        <footer>
            <a href="privacyverklaring.html">Privacyverklaring</a>
        </footer>
    </body>
</html>