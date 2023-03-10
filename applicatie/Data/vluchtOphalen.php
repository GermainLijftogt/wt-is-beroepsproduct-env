<?php
function vluchtOphalen($verbinding, $vluchtnummer){
    $query = 'select v.vluchtnummer, v.bestemming, v.gatecode, (v.max_aantal - count(p.vluchtnummer)) as plekken_over, v.vertrektijd, v.maatschappijcode
        from vlucht v
        join passagier p on v.vluchtnummer=p.vluchtnummer
        group by v.vluchtnummer, v.bestemming, v.gatecode,v.max_aantal, v.vertrektijd, v.maatschappijcode
        having v.vluchtnummer = ?
        ';

        $media = $verbinding->prepare($query);
        $media->execute([$vluchtnummer]);
        $row = $media->fetch();
        return $row;
}
?>