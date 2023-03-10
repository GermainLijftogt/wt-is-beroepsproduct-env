<?php
require_once '../applicatie/data/selectMaxPsg.php';
require_once '../applicatie/data/insertOmboeken.php';
require_once '../applicatie/data/selectOmboeken.php';
function omboeken($verbinding){
    $row = selectMaxPsg($verbinding);
    $psg = $row['passagiernummer'];
    $newpsg = $psg+1;
    $psgnummer = $_SESSION['psgnummer'];
    $data = selectOmboeken($verbinding, $psgnummer);
    while($rij = $data->fetch()){
        $name = $rij['naam'];
        $geslacht = $rij['geslacht'];
        $vluchtnummer = $rij['vluchtnummer'];
    }
    if(
        !empty($_POST['vluchtnummer']) &&
        !empty($_POST['stoel'])
    ){
        insertOmboeken($verbinding, $newpsg, $name, $geslacht);
    }
    return $psgnummer;
}
?>