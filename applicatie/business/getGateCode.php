<?php
require_once '../applicatie/data/gatecodeSelect.php';
function getGatecode($verbinding){
    $gatecodes = '';
    $dataG = gatecodeSelect($verbinding);
    while($rijG = $dataG->fetch()){
        $gatecode = $rijG['gatecode'];
        $gatecodes = $gatecodes .'
        <option value="'.$gatecode.'">'.$gatecode.'</option>
        ';
    }
    return $gatecodes;
}
?>