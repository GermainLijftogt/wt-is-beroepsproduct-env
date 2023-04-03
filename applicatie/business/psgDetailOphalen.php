<?php
require_once '../applicatie/data/psgOphalenQuery.php';
function psgDetailsOphalen($verbinding,$psg){
$row = psgOphalenQuery($verbinding,$psg);


$psgnummer = $row['passagiernummer'];
$vlucht = $row['vluchtnummer'];
$geslacht = $row['geslacht'];
$balie = $row['balienummer'];
$stoel = $row['stoel'];
$inchecktijdstip = $row['inchecktijdstip'];
$psginfo= '
<p>'.$psgnummer.'</p>
<p>'.$vlucht.' </p>
<p>'.$geslacht.' </p>
<p>'.$balie.' </p>
<p>'.$stoel.' </p>
<p>'.$inchecktijdstip.'</p>
';
return $psginfo;
}
function nameOphalen($verbinding,$psg){
    $row = psgOphalenQuery($verbinding,$psg);

    $naam = $row['naam'];

    return $naam;
}
function vluchtInfoOphalen($verbinding, $psg){
    $row = psgOphalenQuery($verbinding,$psg);

    $vlucht = $row['vluchtnummer'];
    $maatschappij = $row['maatschappijcode'];
    $vliegveld = $row['vliegveld'];
    return '
    <h2>Vluchtinformatie:</h2>
    <p>Vluchtnummer '.$vlucht.' gaat naar het mooie '.$vliegveld.'.</p>
    <p>Er wordt gevlogen met  '.$maatschappij.'.</p>
    <p>Er worden snacks en drankjes verzorgd in het vliegtuig</p>
    <img src="Images/'.$maatschappij.'.jpg" alt="vliegtuig van '.$maatschappij.'" height="183" width="275">
    ';
}
?>