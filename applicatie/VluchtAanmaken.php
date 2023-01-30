<?php
require_once 'db_connectie.php';
global $verbinding;

$query = 'select max(vluchtnummer) as vlucht from Vlucht';
$data = $verbinding->query($query);
$rij = $data->fetch();
$nieuwvlucht = $rij['vlucht']+1;
$queryL = 'select luchthavencode from Luchthaven';
$queryG = 'select gatecode from Gate';
$queryM = 'select maatschappijcode from Maatschappij';

if (
    !empty($_POST['bestemming']) &&
    !empty($_POST['gatecode']) &&
    !empty($_POST['maxntl']) &&
    !empty($_POST['maxkgpp']) &&
    !empty($_POST['maxtotkg']) &&
    !empty($_POST['datum']) &&
    !empty($_POST['maatschappij'])
) {
        $bestemming = $_POST['bestemming'];
        $gate = $_POST['gatecode'];
        $maxntl = $_POST['maxntl'];
        $maxkgpp = $_POST['maxkgpp'];
        $maxtotkg = $_POST['maxtotkg'];
        $date = $_POST['datum'];
        $maatschappij = $_POST['maatschappij'];

        $query1 = 'INSERT INTO Vlucht (vluchtnummer, bestemming, gatecode, max_aantal, max_gewicht_pp, max_totaalgewicht, vertrektijd, maatschappijcode)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                        ';
        $sql = $verbinding->prepare($query1);
        
        $sql->execute([$nieuwvlucht, $bestemming, $date, $maxntl, $maxkgpp, $maxtotkg, NULL, $maatschappij]);
}
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
            <form method="POST">

                <label for="bestemming">Bestemming:</label>
                <select name="bestemming" id="bestemming">
                    <?php
                        $dataL = $verbinding->query($queryL);
                        while($rijL = $dataL->fetch()){
                            $luchthaven= $rijL['luchthavencode'];
                            echo'
                            <option value="'.$luchthaven.'">'.$luchthaven.'</option>
                            ';
                        }
                    ?>
                </select>
                <label for="gatecode">Gatecode:</label>
                <select name="gatecode" id="gatecode">
                    <?php
                        $dataG = $verbinding->query($queryG);
                        while($rijG = $dataG->fetch()){
                            $gatecode = $rijG['gatecode'];
                            echo'
                            <option value="'.$gatecode.'">'.$gatecode.'</option>
                            ';
                        }
                    ?>
                </select>
                
                <label for="maxntl">Max Aantal</label>
                <input id="maxntl" placeholder="bijvoorbeeld: 111" type="number" name="maxntl" required>

                <label for="maxkgpp">Maximale gewicht van de bagage per persoon (in kg):</label>
                <input id="maxkgpp" placeholder="bijvoorbeeld: 11" type="number" name="maxkgpp" required>

                <label for="maxtotkg">Maximale totaalgewicht(in kg):</label>
                <input id="maxtotkg" placeholder="Bijvoorbeeld: 1111" type="number" name="maxtotkg" required>

                <label for="datum">Vertrekdatum:</label>
                <input id="datum" type="datetime-local" name="datum" required>

                <label for="maatschappij">Maatschappij:</label>
                <select name="maatschappij" id="maatschappij">
                    <?php
                        $dataM = $verbinding->query($queryM);
                        while($rijM = $dataM->fetch()){
                            $maatschappijcode = $rijM['maatschappijcode'];
                            echo'
                            <option value="'.$maatschappijcode.'">'.$maatschappijcode.'</option>
                            ';
                        }
                    ?>
                
                <input type="submit" value="Vlucht aanmaken">
            </form>
        </div>

        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>