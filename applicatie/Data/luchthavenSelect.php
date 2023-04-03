<?php
function luchthavenSelect($verbinding){
    $queryL = 'select luchthavencode from Luchthaven';
    $dataL = $verbinding->query($queryL);
    return $dataL;
}
?>