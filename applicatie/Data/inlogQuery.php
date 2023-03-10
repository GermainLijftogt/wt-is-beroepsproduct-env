<?php
function inlogQuery($verbinding, $balie){
    $data = $verbinding->prepare("select wachtwoord from Balie where balienummer = ?");
    $data->execute([$balie]);
    return $data
}
?>