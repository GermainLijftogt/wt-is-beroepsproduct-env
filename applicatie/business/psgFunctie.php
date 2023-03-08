<?php
function newPsg($verbinding){
    $querypsg = 'select max(passagiernummer) as passagiernummer from passagier';
    $data = $verbinding->query($querypsg);
    $row = $data->fetch();
    $newpsg = $row['passagiernummer'] + 1;
    $vluchtnummer = $_GET['vluchtnummer'];

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
}

function stoelen($verbinding){
    $querystoelen = 'select stoel 
    from passagier 
    where stoel NOT IN 
    (select stoel
    from passagier
    where vluchtnummer = ?)
    group by stoel ';

    $dataS = $verbinding->prepare($querystoelen);
    $dataS->execute([$vluchtnummer]);
    $stoelen = '';
    while($rijS = $dataS->fetch()){
        $stoel = $rijS['stoel'];
        $stoelen = $stoelen . '
            <option value="'.$stoel.'">'.$stoel.'</option>
        ';
    }
    return $stoelen;
}
?>