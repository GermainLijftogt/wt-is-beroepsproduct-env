<?php
require_once '../applicatie/data/allePsgSelect.php';
require_once '../applicatie/business/vluchtnrCheck.php';
function getPassagiers($verbinding){
    $vluchtnummer = getVluchtNr();
    if(isset($vluchtnummer)){
        $vluchtnummer = $_GET['vluchtnummer'];
        $data = passagiersOphalen($verbinding, $vluchtnummer);
    }
    
    $html_table = '<table class="tabel">';
    $html_table = $html_table . '<thead><tr><td>Passagiernummer</td><td>Naam</td><td>Geslacht</td><td>Balienummer</td><td>Stoel</td><td>Inchecktijdstip</td></tr></thead>';

    while($rij = $data->fetch()){
        $psgnummer = $rij['passagiernummer'];
        $naam = $rij['naam'];
        $geslacht = $rij['geslacht'];
        $balienummer = $rij['balienummer'];
        $stoel = $rij['stoel'];
        $incheck = $rij['inchecktijdstip'];
        $html_table = $html_table . '<tbody><tr><td>'.$psgnummer.'</td><td>'.$naam.'</td><td>'.$geslacht.'</td><td>'.$balienummer.'</td><td>'.$stoel.'</td><td>'.$incheck.'</td></tr>';
    }
    $html_table = $html_table . "</table>";
    return $html_table;
}
function getAllePassagiers($verbinding){
    if(isset($_GET['zoeken'])) {
        $zoek = $_GET['zoeken'];
        $data = allePassagiersOphalen($verbinding, $zoek);
    } else {
        $zoek = '';
        $data = allePassagiersOphalen($verbinding, $zoek);
    }
    $html_table = '<table class="tabel">';
    $html_table = $html_table . '<thead><tr><td>Passagiernummer</td><td>Naam</td><td>Geslacht</td><td>Balienummer</td><td>Stoel</td><td>Inchecktijdstip</td></tr></thead>';

    while($rij = $data->fetch()){
        $psgnummer = $rij['passagiernummer'];
        $naam = $rij['naam'];
        $geslacht = $rij['geslacht'];
        $balienummer = $rij['balienummer'];
        $stoel = $rij['stoel'];
        $incheck = $rij['inchecktijdstip'];
        $html_table = $html_table . '<tbody><tr><td>'.$psgnummer.'</td><td>'.$naam.'</td><td>'.$geslacht.'</td><td>'.$balienummer.'</td><td>'.$stoel.'</td><td>'.$incheck.'</td></tr>';
    }
    $html_table = $html_table . "</table>";
    return $html_table;
}
?>