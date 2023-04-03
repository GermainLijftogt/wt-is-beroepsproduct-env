<?php
function omboekenPsg($verbinding,$psgnummer,$vluchtnummer, $stoel){
    $query = 'update Passagier
    set vluchtnummer = ?, stoel = ?
    where passagiernummer = ?';
        $sql = $verbinding->prepare($query);
        $sql->execute([$vluchtnummer, $stoel,$psgnummer]);
}
?>