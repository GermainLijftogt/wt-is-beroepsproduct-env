<?php
require_once '../applicatie/data/maxVluchtNrSelect.php';
function getMaxVluchtnr($verbinding){
    $rij = maxVluchtnr($verbinding);
    $nieuwvlucht = $rij['vlucht']+1;
    return $nieuwvlucht;
}
?>