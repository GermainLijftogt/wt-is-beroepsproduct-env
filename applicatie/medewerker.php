

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php 
        require_once 'headermedewerker.php'
        ?>
        <div class="medewerkerbtn">
            <a href="vluchtenmedewerker.php" class="medewerker">Wilt u vluchten inzien?</a>
            <a href="passagierdetail.php" class="medewerker">Wilt u passagierdetails inzien?</a>
            <a href="bagageinchecken.php" class="medewerker">Wilt u de bagage van passagier inchecken?</a>
            <a href="vluchtAanmaken.php" class="medewerker">Wilt u een nieuwe vlucht aanmaken?</a>
        </div>

        <footer class="footer">
            <a href="privacymedewerker.php">Privacyverklaring</a>
        </footer>
    </body>
</html>