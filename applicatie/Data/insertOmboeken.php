<?php
function insertOmboeken($verbinding, $psgnummer, $name, $geslacht){
    $query = 'INSERT INTO passagier (passagiernummer, naam, vluchtnummer, geslacht, balienummer, stoel, inchecktijdstip)
    VALUES(?, ? ,? ,? , ?, ?, ?)';
    $sql = $verbinding->prepare($query);
    $sql->execute([$psgnummer, $name, $_POST['vluchtnummer'], $geslacht, $_SESSION['balie'], $_POST['stoel'], date('d-m-y h:i:s')]);
}
?>