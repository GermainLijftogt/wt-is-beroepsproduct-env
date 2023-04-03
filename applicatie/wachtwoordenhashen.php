<?php
require_once 'db_connectie.php';
require_once 'business/checkMedewerker.php';
geenMedewerker();

global $verbinding;
$maxbalie = 10;
$balie = 1;
$ww = "wachtwoord";
while($balie <= $maxbalie){
    $ww .= $balie;
    echo $ww .' ';
    $hashed_ww = password_hash($ww, PASSWORD_DEFAULT);
    $query = "UPDATE Balie
                SET wachtwoord = '$hashed_ww'
                WHERE balienummer = ?
                ";

    $sql = $verbinding->prepare($query);
    $sql->execute([$balie]);
    $balie++;
}
?>