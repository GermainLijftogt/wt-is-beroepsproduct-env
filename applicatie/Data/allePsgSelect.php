<?php
function passagiersOphalen($verbinding, $vluchtnummer){
    $query = '
    select *
    from passagier
    where vluchtnummer = ?
    ';
    $data = $verbinding->prepare($query);
    $data->execute([$vluchtnummer]);
    return $data;
}
function allePassagiersOphalen($verbinding, $zoek){
    $query = '
    select TOP(25) *
    from passagier
    where naam like ?
    ';
    $data = $verbinding->prepare($query);
    $data->execute(['%' . $zoek . '%']);
    return $data;
}
?>