<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';
$passagier = $_SESSION['psg'] === true;
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
        <?= 
        getHeader();        
        ?>
        <div class="medewerkerbtn">
            <?php
            // moet dit uit de code?
            if ($passagier){
                // moet dit ook uit de code
                echo '
                    <a href="vluchtenoverzicht.php" class="medewerker">Wilt u vluchten inzien?</a>
                    <a href="passagierdetail.php" class="medewerker">Wilt u passagierdetails inzien?</a>
                    <a href="bagageinchecken.php" class="medewerker">Wilt u de bagage van passagier inchecken?</a>
                    <a href="vluchtAanmaken.php" class="medewerker">Wilt u een nieuwe vlucht aanmaken?</a>
                    <a href="omboeken.php" class="medewerker">Wilt u omboeken?</a>
                ';
            }
            else {
                echo '
                <a href="vluchtenoverzicht.php" class="medewerker">Wilt u vluchten inzien?</a>
                <a href="vluchtAanmaken.php" class="medewerker">Wilt u een nieuwe vlucht aanmaken?</a>
                ';
            }
            ?>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>