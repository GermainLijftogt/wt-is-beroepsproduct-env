<?php
function getStoelen($verbinding,$vluchtnummer){
    $querystoelen = 'select stoel 
    from passagier 
    where stoel NOT IN 
    (select stoel
    from passagier
    where vluchtnummer = ?)
    group by stoel ';

    $dataS = $verbinding->prepare($querystoelen);
    $dataS->execute([$vluchtnummer]);
    return $dataS;
}
?>