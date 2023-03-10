<?php
function insertPsg($verbinding,$newpsg){
    $query = 'INSERT INTO passagier (passagiernummer, naam, vluchtnummer, geslacht, balienummer, stoel, inchecktijdstip)
        VALUES (?, ? ,? ,? , ?, ?, ?)';
        $sql = $verbinding->prepare($query);
        $sql->execute([$newpsg, $_POST['name'], $_POST['vluchtnummer'], $_POST['geslacht'], $_SESSION['balie'], $_POST['stoel'], date('d-m-y h:i:s')]);
}
?>