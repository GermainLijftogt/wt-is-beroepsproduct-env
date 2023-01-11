<?php
require_once 'db_connectie.php';
?>
<?php
global $verbinding;

$foutmelding_login = "";
$medewerker = false;
$_SESSION['psg'] = false;

if (isset($_SESSION['login'])){
    echo 'hallo1';
    $medewerker = $_SESSION['login'];
}

if($medewerker){
    header("location: medewerker.php");
    echo 'hallo2';
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
        $hashed = $row['wachtwoord'];
        echo $wachtwoord;
        echo $hashed;
        if (password_verify($wachtwoord, $hashed)) {
            echo 'hallo4';
            $_SESSION['login'] = true;
            $_SESSION['balie'] = $balie;
        }

    } 
    
    if (isset($_SESSION['login'])){
        $medewerker = $_SESSION['login'];
        echo 'hallo3';
    }
    if(!$medewerker){
        $foutmelding_login = "Onjuiste inloggegevens";
    }
    if($medewerker){
        $foutmelding_login = "";
        header('location: medewerker.php');
        echo 'hallo5';
    }
}

if(
    !empty($_POST['psgnummer'])
) {
    $_SESSION['psgnummer'] = 23452;
    $_SESSION['psg'] = true;
}


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
                <input id="balie" placeholder="balienummer" type="number" name="balie" value="<?php if(isset($balie)) echo $balie; ?>" required>

                <label for="password">Wachtwoord:</label>
                <input id="password" placeholder="Type hier uw wachtwoord" type="password" name="wachtwoord" required>

                <label for="psgnummer">Passagiernummer: </label>
                <input id="psgnummer" placeholder="123456" type="number" name="psgnummer">

                <input type="submit" value="Inloggen">
            </form>
        </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>