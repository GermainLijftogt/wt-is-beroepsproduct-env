<?php
require_once '../applicatie/data/luchthavenSelect.php';
function getLuchthavens($verbinding){
    $luchthavens = '';
    $dataL = luchthavenSelect($verbinding);
    while($rijL = $dataL->fetch()){
        $luchthaven= $rijL['luchthavencode'];
        $luchthavens = $luchthavens .'
        <option value="'.$luchthaven.'">'.$luchthaven.'</option>
        ';
    }
    return $luchthavens;
}
?>