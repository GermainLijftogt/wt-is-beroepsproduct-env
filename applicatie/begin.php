<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Begin</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <header>
            <a href="begin.php">CheckinGelre</a>
            <div class="dropdown">
                <button class="dropbutton">Menu</button>
                <div class="content">
                    
                </div>
            </div>
        </header>

        <h1>Bent u een passagier of medewerker?</h1>
        <div class="beginbtn">
            <a href="home.php" class="begin">Passagier</a>
            <a href="medewerkerinlog.php" class="begin">Medewerker</a>
        </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>