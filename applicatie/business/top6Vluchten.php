<?php
require_once '../applicatie/data/top6VQuery.php';
// businessfunctie
function returnVlucht($verbinding){
    $dataV = top6Vluchten($verbinding);
    $vluchten = '';
    while($rijV = $dataV->fetch()){
        $vluchtnummer = $rijV['vluchtnummer'];
        $vertrektijd = $rijV['vertrektijd'];
        $gatecode = $rijV['gatecode'];
        $maatschappijcode = $rijV['maatschappijcode'];
        $vluchten = $vluchten . '
        <div>
            <img src="Images/'.$maatschappijcode.'.jpg" alt="foto van vliegtuig die op dit moment vertrekt">
            <h3>Vluchtnummer:  '.$vluchtnummer.' </h3>
            <h4>Vertrektijd: '.$vertrektijd.'</h4>
            <h4>Gate: '.$gatecode.'</h4>
        </div>
        ';
    }
    return $vluchten;
}
?>