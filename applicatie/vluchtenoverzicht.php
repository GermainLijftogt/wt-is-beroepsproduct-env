<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';
?>
<?php
global $verbinding;
$medewerker = false;


if(isset($_GET['sorteren'])){
$query = 'select TOP (25) vluchtnummer, vertrektijd, bestemming, gatecode, maatschappijcode
from Vlucht
where vertrektijd > SYSDATETIME() and vluchtnummer like  ?
order by maatschappijcode ASC
';
} else {
    $query = 'select TOP (25) vluchtnummer, vertrektijd, bestemming, gatecode, maatschappijcode
from Vlucht
where vertrektijd > SYSDATETIME() and vluchtnummer like  ?
order by vertrektijd ASC
';
}


if(isset($_GET['zoeken'])) {
    $_SESSION['zoeken'] = $_GET['zoeken'];
    $zoek = $_GET['zoeken'];
} else{
    $zoek = "";
}


$data = $verbinding->prepare($query);
$data->execute(['%' . $zoek . '%']);

$html_table = '<table class="tabel">';
$html_table = $html_table . '<thead><tr><td>Vluchtnummer</td><td>Vertrektijd</td><td>Bestemming</td><td>Gate</td><td>Vliegmaatschappij</td></tr></thead>';

while($rij = $data->fetch()){
    $vluchtnummer = $rij['vluchtnummer'];
    $vertrektijd = $rij['vertrektijd'];
    $bestemming = $rij['bestemming'];
    $gatecode = $rij ['gatecode'];
    $maatschappijcode = $rij['maatschappijcode'];

    $html_table = $html_table . '<tbody><tr><td><a href="vlucht.php?vluchtnummer='.$vluchtnummer.'">'.$vluchtnummer.'</a></td><td>'.$vertrektijd.' </td><td>'.$bestemming.'</td><td>'.$gatecode.'</td><td>'. $maatschappijcode.'</td></tr>';
}

$html_table = $html_table . "</table>";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vluchtenoverzicht</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?=
        getHeader();
        ?>
        
        <h1>Vluchtenoverzicht</h1>
        <p>Hier kunt u de komende vluchten inzien</p>
        <div class="filter">
            <form class= "searchbar" method="GET" action="vluchtenoverzicht.php">
                <input type="number" name="zoeken" placeholder="Zoeken"> 
                <input type="submit" value="Zoeken">
            </form>
            
            <div class="dropdown">
                <button class="dropbutton">Sorteren</button>
                <div class="content">
                    <a name="vertrektijd" href="vluchtenoverzicht.php">Tijd</a>
                    <a name="bestemming" href="vluchtenoverzicht.php?sorteren=maatschappijcode">Luchthaven</a>
                </div>
            </div>
        </div>
        <div style="overflow-x:auto;">
        <?php 
        echo($html_table);
        ?>
        </div>
        <?php
        if($medewerker){
        '<div>
            <a href="VluchtAanmaken.php" class="vluchtaanmkn">Vlucht aanmaken?</a>
        </div>
        ';
        }
        ?>
        <?=
        getFooter();
        ?>
    </body>
</html>