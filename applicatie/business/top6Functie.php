<?php

function top6Vluchten($verbinding){
    $queryV = '
    select TOP(6) vluchtnummer, vertrektijd, gatecode, maatschappijcode
    from Vlucht
    where vertrektijd > SYSDATETIME()
    order by vertrektijd ASC
    ';
    $dataV = $verbinding->query($queryV);
    return $dataV;
}
// businessfunctie
function returnVlucht($verbinding){
    $dataV = top6Vluchten($verbinding);
    while($rijV = $dataV->fetch()){
        $vluchten = $vluchten . returnVlucht($rijV);
    }
    $vluchtnummer = $rijV['vluchtnummer'];
    $vertrektijd = $rijV['vertrektijd'];
    $gatecode = $rijV['gatecode'];
    $maatschappijcode = $rijV['maatschappijcode'];
    
    // hoort misschien in presentatielaag
    return '
    <div>
        <img src="Images/'.$maatschappijcode.'.jpg" alt="foto van vliegtuig die op dit moment vertrekt">
        <h3>Vluchtnummer:  '.$vluchtnummer.' </h3>
        <h4>Vertrektijd: '.$vertrektijd.'</h4>
        <h4>Gate: '.$gatecode.'</h4>
    </div>
    ';
}
function top6Bestemmingen($verbinding){
    $queryB = '
    select TOP(6) bestemming, count(vluchtnummer) as aantal_vluchten
    from Vlucht
    group by bestemming
    order by aantal_vluchten DESC
    ';
    $dataB = $verbinding->query($queryB);
    $bestemmingen = '';
    while($rijB = $dataB->fetch()){
        $bestemmingen = $bestemmingen . returnBestemming($rijB);
    }
    return $bestemmingen;
}
function returnBestemming($rijB){
    $bestemming = $rijB['bestemming'];
    $aantal_vluchten = $rijB['aantal_vluchten'];

    return '
        <div>
            <img src="Images/'.$bestemming.'.jpg" alt="foto van Bestemming">
            <h3>'.$bestemming.'</h3>
        </div>
        ';
}
?>