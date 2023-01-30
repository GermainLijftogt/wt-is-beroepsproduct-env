<?php
require_once 'db_connectie.php';

if(!empty($_GET['psgnummer'])){
    $psgnummer = $_GET['nummer'];
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zelfservice</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>hier kan u uzelf inchecken</p>
        </div>
        <div class="form">
        <form method="GET" action="zelfservice.php?psgnummer=<?php $vluchtnummer;?>">

            <label for="psgnummer">Uw passagiersnummer:</label>
            <input id="psgnummer" placeholder="11111" type="number" name="psgnummer" required>
                
            <input type="submit" value="Verder">
        </form>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>