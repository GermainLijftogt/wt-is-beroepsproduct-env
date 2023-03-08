<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';
global $verbinding;

$psg = $_SESSION['psgnummer'];

$query = 'select p.passagiernummer, p.naam, p.vluchtnummer, p.geslacht, p.balienummer, p.stoel, p.inchecktijdstip, v.maatschappijcode, L.naam as vliegveld
from Passagier P 
join Vlucht V on P.vluchtnummer=V.vluchtnummer
join Luchthaven L on V.bestemming=L.luchthavencode
where passagiernummer = ?
';
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
$maatschappij = $row['maatschappijcode'];
$vliegveld = $row['vliegveld'];
?>
        <?=
        getHeader("Passagierdetail");
        ?>
        <h1><?php echo $naam ?>:</h1>
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
                <p><?php echo $psgnummer ?></p>
                <p><?php echo $vlucht ?></p>
                <p><?php echo $geslacht ?></p>
                <p><?php echo $balie ?></p>
                <p><?php echo $stoel ?></p>
                <p><?php echo $inchecktijdstip ?></p>
            </div>
        </div>
        <?php
        if(!isset($inchecktijdstip)){
            echo '
            <div>
                <a href="bagageinchecken.php" class="incheck">Klik hier om in te checken</a>
            </div>
            ';
        } 
        ?>
        <article class="vluchtinfo">
            <h2>Vluchtinformatie:</h2>
            <p>Vluchtnummer <?php echo $vlucht; ?> gaat naar het mooie <?php echo $vliegveld?>.</p>
            <p>Er wordt gevlogen met <?php echo $maatschappij?>.</p>
            <p>Er worden snacks en drankjes verzorgd in het vliegtuig</p>
            <img src="Images/<?php echo $maatschappij?>.jpg" alt="vliegtuig van <?php echo $maatschappij?>" height="183" width="275">
        </article>
        <?=
        getFooter();
        ?>
    </body>
</html>