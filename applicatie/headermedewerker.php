<?php 
if (isset($_SESSION)){
    echo'
    <header>
    <a href="medewerker.php">CheckinGelre</a>
    <div class="dropdown">
        <button class="dropbutton">Menu</button>
            <div class="content">
                <a href="medewerker.php">Home</a>
                <a href="vluchtenmedewerker.php">Vluchtenoverzicht</a>
                <a href="passagierdetail.php">Passagierdetail</a>
                <a href="bagageinchecken.php">Bagage inchecken</a>
                <a href="vluchtAanmaken.php">Vlucht aanmaken</a>
            </div>
        </div>
        <a href="Begin.php" class="split">Uitloggen</a>
    </header>
    ';
} else if(!isset($_SESSION)){
    echo 
    '
    <header>
    <a href="home.php">CheckinGelre</a>
    <div class="dropdown">
        <button class="dropbutton">Menu</button>
        <div class="content">
            <a href="home.php">Home</a>
            <a href="zelfservice.php">Zelfservice</a>
            <a href="vluchtenoverzicht.php">Vluchtenoverzicht</a>
        </div>
    </div>
    <a href="Begin.php" class="split">Uitloggen</a>
    </header>
    ';
}
?>