<?php
function selectMaxPsg($verbinding){
    $querypsg = 'select max(passagiernummer) as passagiernummer from passagier';
    $data = $verbinding->query($querypsg);
    $row = $data->fetch();
    return $row;
}
?>