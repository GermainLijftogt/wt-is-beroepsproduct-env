<?php
function checkPsgNummer(){
    if(!empty($_GET['psgnummer'])){
        $psgnummer = $_GET['nummer'];
        return $psgnummer;
    } else {
        return '';
    }
}
?>