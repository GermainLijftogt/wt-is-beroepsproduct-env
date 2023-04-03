<?php
require_once '../applicatie/data/omboekenUpdate.php';
require_once '../applicatie/data/selectOmboeken.php';
function omboeken($verbinding){
    $psgnummer = $_SESSION['psgnummer'];
    $data = selectOmboeken($verbinding, $psgnummer);
    while($rij = $data->fetch()){
        $name = $rij['naam'];
        $geslacht = $rij['geslacht'];
        $vluchtnummer = $rij['vluchtnummer'];
    }
    if(
        !empty($_POST['stoel'])
    ){
        $newVlucht = $_GET['vluchtnummer'];
        $stoel = $_POST['stoel'];
        omboekenPsg($verbinding, $psgnummer, $newVlucht, $stoel);
    }
    return $psgnummer;
}
?>