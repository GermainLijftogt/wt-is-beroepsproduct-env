<?php
require_once '../applicatie/data/selectMaxPsg.php';
require_once '../applicatie/data/insertPsg.php';
require_once '../applicatie/data/selectStoel.php';
function newPsg($verbinding){
    $row = selectMaxPsg($verbinding);
    $newpsg = $row['passagiernummer'] + 1;
    $vluchtnummer = $_GET['vluchtnummer'];

    if(
        !empty($_POST['vluchtnummer']) &&
        !empty($_POST['name']) &&
        !empty($_POST['geslacht']) &&
        !empty($_POST['stoel'])
        ) {
        insertPsg($verbinding,$newpsg);
    }
}

function stoelen($verbinding){
    $vluchtnummer = $_GET['vluchtnummer'];
    $dataS = getStoelen($verbinding,$vluchtnummer);
    $stoelen = '';
    while($rijS = $dataS->fetch()){
        $stoel = $rijS['stoel'];
        $stoelen = $stoelen . '
            <option value="'.$stoel.'">'.$stoel.'</option>
        ';
    }
    return $stoelen;
}
?>