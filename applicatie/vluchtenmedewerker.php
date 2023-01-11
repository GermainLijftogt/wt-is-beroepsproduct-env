<?php
require_once 'db_connectie.php';
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
        <?php
        require_once 'headermedewerker.php';
        ?>
        
        <h1>Vluchtenoverzicht</h1>
        <p>Hier kunt u de komende vluchten inzien</p>
        <div class="filter">
            <form class= "searchbar" action="vluchtenmedewerker.html">
                <input type="number" placeholder="Zoeken"> 
                <input type="submit" value="Zoeken">
            </form>
            <div class="dropdown">
                <button class="dropbutton">Sorteren</button>
                <div class="content">
                    <a href="">Tijd</a>
                    <a href="">Luchthaven</a>
                </div>
            </div>
        </div>
        <div style="overflow-x:auto;">
            <table class="tabel">
                <thead>
                    <tr>
                        <td>Vluchtnummer</td>
                        <td>Vertrektijd</td>
                        <td>Bestemming</td>
                        <td>Gate</td>
                        <td>Vliegmaatschappij</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="vlucht1Medewerker.html">111</a></td>
                        <td>12:30</td>
                        <td>Dubai</td>
                        <td>1</td>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <td><a href="vlucht1.html">112</a></td>
                        <td>12:45</td>
                        <td>London</td>
                        <td>3</td>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <td><a href="vlucht1.html">113</a></td>
                        <td>13:00</td>
                        <td>Cancun</td>
                        <td>6</td>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <td><a href="vlucht1.html">114</a></td>
                        <td>13:00</td>
                        <td>Bali</td>
                        <td>8</td>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <td><a href="vlucht1.html">115</a></td>
                        <td>13:10</td>
                        <td>Kreta</td>
                        <td>5</td>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <td><a href="vlucht1.html">116</a></td>
                        <td>13:40</td>
                        <td>Rome</td>
                        <td>5</td>
                        <td>KLM</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="VluchtAanmaken.php" class="vluchtaanmkn">Vlucht aanmaken?</a>
        </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>