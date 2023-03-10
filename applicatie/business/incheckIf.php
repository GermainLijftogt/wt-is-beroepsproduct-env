<?php
require_once '../applicatie/data/psgOphalenQuery.php';
function checkIncheck($verbinding,$psg){
    $row = psgOphalenQuery($verbinding,$psg);
    $inchecktijdstip = $row['inchecktijdstip'];

    if(!isset($inchecktijdstip)){
        return '
        <div>
            <a href="bagageinchecken.php" class="incheck">Klik hier om in te checken</a>
        </div>
        ';
    } else {
        return '';
    }
}
?>