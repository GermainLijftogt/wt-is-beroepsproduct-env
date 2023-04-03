<?php
function psgOphalenQuery($verbinding, $psg){
    $query = 'select p.passagiernummer, p.naam, p.vluchtnummer, p.geslacht, p.balienummer, p.stoel, p.inchecktijdstip, v.maatschappijcode, L.naam as vliegveld
    from Passagier P 
    join Vlucht V on P.vluchtnummer=V.vluchtnummer
    join Luchthaven L on V.bestemming=L.luchthavencode
    where passagiernummer = ?
    ';
    $media = $verbinding->prepare($query);
    $media->execute([$psg]);
    $row = $media->fetch();
    return $row;
}
?>