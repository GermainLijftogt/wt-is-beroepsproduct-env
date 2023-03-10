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
function geenMedewerker(){
    $medewerker = checkMedewerker();
    if(!$medewerker){
        header ('location: index.php');
    }
}
?>