<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/newVlucht.php';
require_once 'business/maxVluchtNr.php';
require_once 'business/getLuchthavens.php';
require_once 'business/getGatecode.php';
require_once 'business/getMaatschappij.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();
global $verbinding;

$nieuwvlucht = getMaxVluchtnr($verbinding);


$queryM = 'select maatschappijcode from Maatschappij';

<<<<<<< HEAD
if (
    !empty($_POST['bestemming']) &&
    !empty($_POST['gatecode']) &&
    !empty($_POST['maxntl']) &&
    !empty($_POST['maxkgpp']) &&
    !empty($_POST['maxtotkg']) &&
    !empty($_POST['datum']) &&
    !empty($_POST['maatschappij']) 
) { echo 'het werkt';
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
} else{
    echo 'het werkt niet';
    var_dump($_POST);
}
=======
newVlucht($verbinding, $nieuwvlucht);
>>>>>>> 6beb4a8548dc6fb744a1ca96c76b36a91cba6f73
?>


        <?=
        getHeader("Vlucht aanmaken");
        ?>

        <h1 class="hvluchtmkn">Vlucht aanmaken</h1>
        <div class="form">
            <form method="POST">

                <label for="bestemming">Bestemming:</label>
                <select name="bestemming" id="bestemming">
                    <?=
                       getLuchthavens($verbinding); 
                    ?>
                </select>
                <label for="gatecode">Gatecode:</label>
                <select name="gatecode" id="gatecode">
                    <?=
                        getGatecode($verbinding);
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
                    <?=
                    getMaatschappij($verbinding);
                    ?>
                
                <input type="submit" value="Vlucht aanmaken">
            </form>
        </div>

        <?=
        getFooter();
        ?>
    </body>
</html>