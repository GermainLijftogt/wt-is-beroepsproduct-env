<?php
function maxVluchtnr($verbinding){
    $query = 'select max(vluchtnummer) as vlucht from Vlucht';
    $data = $verbinding->query($query);
    $rij = $data->fetch();
    return $rij;
}
?>