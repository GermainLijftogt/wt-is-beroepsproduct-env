<?php
function checkMedewerker(){
if (isset($_SESSION['login'])){
    $medewerker = $_SESSION['login'];
    return $medewerker;
} else {
    $medewerker = false;
    return $medewerker;
}
}
?>