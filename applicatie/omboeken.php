<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';
global $verbinding;

$querypsg = 'select max(passagiernummer) as passagiernummer from passagier';
$data1 = $verbinding->query($querypsg);
$row = $data1->fetch();
$psg = $row['passagiernummer'];
$psgnummer = $psg+1;

$queryvlucht = 'select vluchtnummer from passagier where passagiernummer = ?';
$datavlucht = $verbinding->prepare($queryvlucht);
$datavlucht->execute([$psg]);
while($rijV = $datavlucht->fetch()){
    $vluchtnummer = $rijV['vluchtnummer'];
}




$psgnummer = $_SESSION['psgnummer'];

$queryoud = 'select naam, geslacht from passagier where passagiernummer = ? ';
$data = $verbinding->prepare($queryoud);
$data->execute([$psgnummer]);
while($rij = $data->fetch()){
    $name = $rij['naam'];
    $geslacht = $rij['geslacht'];
}
if(
    !empty($_POST['vluchtnummer']) &&
    !empty($_POST['stoel'])
){
$query = 'INSERT INTO passagier (passagiernummer, naam, vluchtnummer, geslacht, balienummer, stoel, inchecktijdstip)
    VALUES(?, ? ,? ,? , ?, ?, ?)';
    $sql = $verbinding->prepare($query);
    $sql->execute([$newpsg, $name, $_POST['vluchtnummer'], $geslacht, $_SESSION['balie'], $_POST['stoel'], date('d-m-y h:i:s')]);
}
?>


        <?=
        getHeader("VLucht aanmaken");
        ?>

        <h1>Omboeken passagier</h1>
        <p>Dit is voor vlucht <?php echo $vluchtnummer;?></p>
        <div class="form">
            <form method="post">

                <label for="vluchtnummer">Nieuw vluchtnummer:</label>
                <input id="vluchtnummer" placeholder="Bijvoorbeeld: 111" type="number" name="vluchtnummer" required>

                <label for="stoel">Stoel:</label>
                <select name="stoel" id="stoel">
                    <?php
                        $querystoelen = 'select stoel 
                        from passagier 
                        where stoel NOT IN 
                        (select stoel
                        from passagier
                        where vluchtnummer = ?)
                        group by stoel ';
                    
                        $dataS = $verbinding->prepare($querystoelen);
                        $dataS->execute([$_POST['vluchtnummer']]);
                        while($rijS = $dataS->fetch()){
                            $stoel = $rijS['stoel'];
                            echo '
                                <option value="'.$stoel.'">'.$stoel.'</option>
                            ';
                        }
                    ?>
                </select>
                <input type="submit" value="Omboeken">
            </form>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>