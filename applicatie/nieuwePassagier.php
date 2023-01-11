<?php
require_once 'db_connectie.php';
global $verbinding;

$querypsg = 'select max(passagiernummer) as passagiernummer from passagier';
$data = $verbinding->query($querypsg);
$row = $data->fetch();
$newpsg = $row['passagiernummer'] + 1;
$vluchtnummer = $_GET['vluchtnummer'];


$querystoelen = 'select stoel 
from passagier 
where stoel NOT IN 
(select stoel
from passagier
where vluchtnummer = ?)
group by stoel ';


if(
    !empty($_POST['vluchtnummer']) &&
    !empty($_POST['name']) &&
    !empty($_POST['geslacht']) &&
    !empty($_POST['stoel'])
    ) {
        $query = 'INSERT INTO passagier (passagiernummer, naam, vluchtnummer, geslacht, balienummer, stoel, inchecktijdstip)
        VALUES (?, ? ,? ,? , ?, ?, ?)';
        $sql = $verbinding->prepare($query);
        $sql->execute([$newpsg, $_POST['name'], $_POST['vluchtnummer'], $_POST['geslacht'], $_SESSION['balie'], $_POST['stoel'], date('d-m-y h:i:s')]);
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nieuwe Passagier</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>

        <h1>Nieuwe passagier</h1>
        <div class="form">
        <form method="post">

            <label for="vluchtnummer">Vluchtnummer:</label>
            <input id="vluchtnummer" placeholder="bijvoorbeeld: 123456" type="number" name="vluchtnummer" value="<?php echo $vluchtnummer?>" required>

            <label for="name">Naam:</label>
            <input id="name" placeholder="bijvoorbeeld: Jan de Wit" type="text" name="name" required>

            <label for="geslacht">Geslacht:</label>
            <select name="geslacht" id="geslacht">
                <option value="M">Man</option>
                <option value="V">Vrouw</option>
                <option value="">Niks</option>
            </select>

            <label for="stoel">Stoel:</label>
            <select name="stoel" id="stoel">
                <?php
                    $dataS = $verbinding->prepare($querystoelen);
                    $dataS->execute([$vluchtnummer]);
                    while($rijS = $dataS->fetch()){
                        $stoel = $rijS['stoel'];
                        echo '
                            <option value="'.$stoel.'">'.$stoel.'</option>
                        ';
                    }
                ?>
            </select>

            <input type="submit" value="Nieuwe passagier invullen">
        </form>
    </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>