<?php
function top6Bestemmingen($verbinding){
    $queryB = '
    select TOP(6) bestemming, count(vluchtnummer) as aantal_vluchten
    from Vlucht
    group by bestemming
    order by aantal_vluchten DESC
    ';
    $dataB = $verbinding->query($queryB);
    return $dataB;
    
}
?>