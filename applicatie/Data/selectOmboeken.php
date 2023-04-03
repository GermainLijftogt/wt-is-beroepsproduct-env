<?php
function selectOmboeken($verbinding, $psgnummer){
    $queryoud = 'select vluchtnummer, naam, geslacht from passagier where passagiernummer = ? ';
    $data = $verbinding->prepare($queryoud);
    $data->execute([$psgnummer]);
    return $data;
}
?>