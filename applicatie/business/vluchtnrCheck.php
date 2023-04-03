<?php
function getVluchtNr(){
    if(isset($_GET['vluchtnummer'])){
        $vluchtnummer = $_GET['vluchtnummer'];
    } else {
        $vluchtnummer = '';
    }
    return $vluchtnummer;
}
?>