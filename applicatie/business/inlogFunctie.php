<?php
function inloggen($verbinding){
    $foutmelding_login = "";
    $medewerker = false;
    $_SESSION['psg'] = false;

    if (isset($_SESSION['login'])){
    $medewerker = $_SESSION['login'];
    }

    if($medewerker){
        header("location: medewerker.php");
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
            if (password_verify($wachtwoord, $hashed)) {
                $_SESSION['login'] = true;
                $_SESSION['balie'] = $balie;
            }

        } 
        
        if (isset($_SESSION['login'])){
            $medewerker = $_SESSION['login'];
            header('location: medewerker.php');
        }

    }

    if(
        !empty($_POST['psgnummer'])
    ) {
        $_SESSION['psgnummer'] = $_POST['psgnummer'];
        $_SESSION['psg'] = true;
    }
}
?>