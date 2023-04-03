<?php
function insertPsg($verbinding,$newpsg,$name,$vluchtnummer,$geslacht,$balie,$stoel){
    $query = 'INSERT INTO passagier (passagiernummer, naam, vluchtnummer, geslacht, balienummer, stoel, inchecktijdstip)
        VALUES (?, ? ,? ,? , ?, ?, ?)';
        $sql = $verbinding->prepare($query);
        $sql->execute([$newpsg, $name, $vluchtnummer, $geslacht, $balie, $stoel, date('d-m-y h:i:s')]);
}

?>