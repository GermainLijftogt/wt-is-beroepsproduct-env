<?php
require_once 'db_connectie.php';

global $verbinding;

if(isset($_GET['vluchtnummer'])){
    $vluchtnummer = $_GET['vluchtnummer'];

    $query = 'select v.vluchtnummer, v.bestemming, v.gatecode, (v.max_aantal - count(p.vluchtnummer)) as plekken_over, v.vertrektijd, v.maatschappijcode
    from vlucht v
    join passagier p on v.vluchtnummer=p.vluchtnummer
    group by v.vluchtnummer, v.bestemming, v.gatecode,v.max_aantal, v.vertrektijd, v.maatschappijcode
    having v.vluchtnummer = ?
    ';

    $media = $verbinding->prepare($query);
    $media->execute([$vluchtnummer]);
    $row = $media->fetch();

    $bestemming = $row['bestemming'];
    $gatecode = $row['gatecode'];
    $plekken_over = $row['plekken_over'];
    $vertrektijd = $row['vertrektijd'];
    $maatschappijcode = $row['maatschappijcode'];
}
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
            <p>Vluchtnummer: <?php echo $vluchtnummer; ?></p>
            <p>Bestemming: <?php echo $bestemming; ?></p>
            <p>Gate: <?php echo $gatecode; ?></p>
            <p>plekken over: <?php echo $plekken_over; ?></p>
            <p>Vertrektijd: <?php echo $vertrektijd; ?></p>
            <p>Vliegmaatschappij: <?php echo $maatschappijcode; ?></p>
            <img src="Images/<?php echo $maatschappijcode; ?>.jpg" alt="Vliegtuig van <?php echo $maatschappijcode ?>">
        </article>
        
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>