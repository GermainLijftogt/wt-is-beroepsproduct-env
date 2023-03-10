<?php 
require_once 'db_connectie.php';



function getHeader($titel){
    $header ='<!DOCTYPE html>
    <html lang="nl">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>'.$titel.'</title>
            <link rel="stylesheet" href="css/stylesheet.css">
        </head>
        <body>';
    $medewerker = false;
    if (isset($_SESSION['login'])){
        $medewerker = $_SESSION['login'];
    }
    if ($medewerker){
        if(isset($_SESSION['psgnummer'])){
        $header = $header.'
        <header>
        <a href="medewerker.php">CheckinGelre</a>
        <div class="dropdown">
            <button class="dropbutton">Menu</button>
                <div class="content">
                    <a href="medewerker.php">Home</a>
                    <a href="vluchtenoverzicht.php">Vluchtenoverzicht</a>
                    <a href="passagierdetail.php">Passagierdetail</a>
                    <a href="bagageinchecken.php">Bagage inchecken</a>
                    <a href="vluchtAanmaken.php">Vlucht aanmaken</a>
                    <a href="omboeken.php">omboeken</a>
                </div>
            </div>
            <a href="uitloggen.php" class="split">Uitloggen</a>
        </header>
        ';
        } else{
            $header =$header.'
        <header>
        <a href="medewerker.php">CheckinGelre</a>
        <div class="dropdown">
            <button class="dropbutton">Menu</button>
                <div class="content">
                    <a href="medewerker.php">Home</a>
                    <a href="vluchtenoverzicht.php">Vluchtenoverzicht</a>
                    <a href="vluchtAanmaken.php">Vlucht aanmaken</a>
                </div>
            </div>
            <a href="uitloggen.php" class="split">Uitloggen</a>
        </header>
        ';
        }
    } else if(!$medewerker){
        $header = $header.'
        <header>
        <a href="home.php">CheckinGelre</a>
        <div class="dropdown">
            <button class="dropbutton">Menu</button>
            <div class="content">
                <a href="home.php">Home</a>
                <a href="psgzelfservice.php">Zelfservice</a>
                <a href="vluchtenoverzicht.php">Vluchtenoverzicht</a>
            </div>
        </div>
        <a href="uitloggen.php" class="split">Uitloggen</a>
        </header>
        ';
    }
    return $header;
}

function getFooter() {
    $footer = '
<footer>
<a href="privacyverklaring.php">Privacyverklaring</a>
</footer>
';
return $footer;
}
?>
