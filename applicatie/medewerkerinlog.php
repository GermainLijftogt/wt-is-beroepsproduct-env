<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/inlogFunctie.php';
global $verbinding;

inloggen($verbinding);


?>


<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <header>
            <a href="medewerkerinlog.php">CheckinGelre</a>
            <div class="dropdown">
                    <button class="dropbutton">Menu</button>
                    <div class="content">
                    </div>
            </div>
            <a href="begin.php" class="split">Terug</a>
        </header>

        <h1 class="inloggen">Inloggen</h1>
        <div class="form">
            <form method ="post">

                <label for="balie">Balie:</label>
                <input id="balie" placeholder="balienummer" type="number" name="balie" value="<?php if(isset($balie)) echo $balie; ?>" required>

                <label for="password">Wachtwoord:</label>
                <input id="password" placeholder="Type hier uw wachtwoord" type="password" name="wachtwoord" required>

                <label for="psgnummer">Passagiernummer: </label>
                <input id="psgnummer" placeholder="123456" type="number" name="psgnummer">

                <input type="submit" value="Inloggen">
            </form>
        </div>
        <?=
            getFooter();
        ?>
    </body>
</html>