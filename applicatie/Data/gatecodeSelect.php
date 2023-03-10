<?php
function gatecodeSelect($verbinding){
    $queryG = 'select gatecode from Gate';
    $dataG = $verbinding->query($queryG);
    return $dataG;
}
?>