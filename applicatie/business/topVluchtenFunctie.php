<?php
require_once '../applicatie/Data/top25Vluchten.php';
function getVluchten($verbinding){
    $sorteren = '';

if(isset($_GET['zoeken'])) {
    $_SESSION['zoeken'] = $_GET['zoeken'];
    $zoek = $_GET['zoeken'];
    if(isset($_GET['sorteren'])){
        $sorteren = 'maatschappijcode';
        $data = getTop25Vluchten($verbinding, $zoek, $sorteren);
    } else {
    $sorteren = 'vertrektijd';
    $data = getTop25Vluchten($verbinding, $zoek, $sorteren);
    } 
} else{
    $zoek = "";
    if(isset($_GET['sorteren'])){
        $sorteren = 'maatschappijcode';
        $data = getTop25Vluchten($verbinding, $zoek, $sorteren);
    } else {
    $sorteren = 'vertrektijd';
    $data = getTop25Vluchten($verbinding, $zoek, $sorteren);
    } 
}
$html_table = '<table class="tabel">';
$html_table = $html_table . '<thead><tr><td>Vluchtnummer</td><td>Vertrektijd</td><td>Bestemming</td><td>Gate</td><td>Vliegmaatschappij</td></tr></thead>';

while($rij = $data->fetch()){
    $vluchtnummer = $rij['vluchtnummer'];
    $vertrektijd = $rij['vertrektijd'];
    $bestemming = $rij['bestemming'];
    $gatecode = $rij ['gatecode'];
    $maatschappijcode = $rij['maatschappijcode'];

    $html_table = $html_table . '<tbody><tr><td><a href="vlucht.php?vluchtnummer='.$vluchtnummer.'">'.$vluchtnummer.'</a></td><td>'.$vertrektijd.' </td><td>'.$bestemming.'</td><td>'.$gatecode.'</td><td>'. $maatschappijcode.'</td></tr>';
}

$html_table = $html_table . "</table>";
return $html_table;
}
?>