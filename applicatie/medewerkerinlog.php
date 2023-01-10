<?php
require_once 'db_connectie.php';

global $verbinding;
$medewerker = false;
$_SESSION['psg'] = false;

if (isset($_SESSION['login'])){
    $medewerker = $_SESSION['login'];
}

if (
    !empty($_POST['balie']) &&
    !empty($_POST['wachtwoord'])
) {
    $balie = $_POST['balie'];
    $wachtwoord = $_POST['wachtwoord'];

    $data = $verbinding->prepare("select wachtwoord from Balie where balienummer = ?");
    $data->execute([$balie]);

    while ($row = $data->fetch()) {
        $wachtwoord = $row['wachtwoord'];
        $_SESSION['login'] = true;
    }
    if (isset($_SESSION['login'])){
        $medewerker = $_SESSION['login'];
    }
    if($medewerker){
        header("location: medewerker.php");
    }
}
if(
    !empty($_POST['psgnummer'])
) {
    $_SESSION['psgnummer'] = $_POST['psgnummer'];
    $_SESSION['psg'] = true;
}


?>


<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inloggen</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        if (!empty($_POST['Balie']) && !empty($_POST['wachtwoord'])){
            echo $foutmelding_login;
            }
        ?>
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
                <input id="balie" placeholder="balienummer" type="text" name="balie" value="<?php if(isset($balie)) echo $balie; ?>" required>

                <label for="password">Wachtwoord:</label>
                <input id="password" placeholder="Type hier uw wachtwoord" type="password" name="wachtwoord" required>

                <label for="psgnummer">Passagiernummer: </label>
                <input id="psgnummer" placeholder="123456" type="number" name="psgnummer">

                <input type="submit" value="Inloggen">
            </form>
        </div>
        <footer class="footer">
            <a href="privacyverklaring.php">Privacyverklaring</a>
        </footer>
    </body>
</html>