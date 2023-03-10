<?php
function maatschappijSelect($verbinding){
    $queryM = 'select maatschappijcode from Maatschappij';
    $dataM = $verbinding->query($queryM);
    return $dataM;
}
?>