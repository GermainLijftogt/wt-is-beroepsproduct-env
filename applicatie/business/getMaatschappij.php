<?php
require_once '../applicatie/data/maatschappijSelect.php';
function getMaatschappij($verbinding){
    $maatschappijen = '';
    $dataM = maatschappijSelect($verbinding);
    while($rijM = $dataM->fetch()){
        $maatschappijcode = $rijM['maatschappijcode'];
        $maatschappijen = $maatschappijen .'
        <option value="'.$maatschappijcode.'">'.$maatschappijcode.'</option>
        ';
    }
    return $maatschappijen;
}
?>