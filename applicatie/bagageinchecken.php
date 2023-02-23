<?php
require_once 'db_connectie.php';
<<<<<<< HEAD
require_once 'functies/Bagageinchecken.php';
global $verbinding;
$psg = $_SESSION['psgnummer'];

$naam = Bagageincheckenquery($psg, $verbinding);


=======
global $verbinding;
$psg = $_SESSION['psgnummer'];

$query = 'select P.passagiernummer, P.naam, V.max_gewicht_pp, M.max_objecten_pp, MAX(B.objectvolgnummer) as max_object_nummer, SUM(b.gewicht) as gewicht_bagage
            from passagier P 
            join Vlucht V on P.vluchtnummer = V.vluchtnummer
            join BagageObject B on p.passagiernummer = b.passagiernummer
            join Maatschappij M on V.maatschappijcode = M.maatschappijcode
            group by P.passagiernummer, P.naam, V.max_gewicht_pp, M.max_objecten_pp
            having p.passagiernummer = ?';
$data = $verbinding->prepare($query);
$data->execute([$psg]);
$row = $data->fetch();


$naam = $row['naam'];
$max_gewicht_pp = $row['max_gewicht_pp'];
$max = $row['max_objecten_pp'];
$objects = $row['max_object_nummer']+1;
$tot_gewicht_bagage = $row['gewicht_bagage'];





if(!empty($_POST['gewicht'])) {
    $gewicht = $_POST['gewicht'];
    if($tot_gewicht_bagage + $gewicht <= $max_gewicht_pp){
    

        $query1 = 'INSERT INTO BagageObject (passagiernummer, objectvolgnummer, gewicht)
                        VALUES (?, ?, ?)';
        $sql = $verbinding->prepare($query1);
        $sql->execute([$psg, $objects, $gewicht]);
    }
}
>>>>>>> f5b22fa4c0642e13555b9e73ce2e79a13aac1aeb
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inchecken</title>
        <link rel="stylesheet" href="/css/stylesheet.css">
    </head>
    <body>
        <?php
        require_once 'headermedewerker.php';
        ?>

        <h1>Bagage van <?php echo $naam?>  inchecken</h1>
        <h1>Passagiernummer: <?php echo $psg ?></h1>
<<<<<<< HEAD
        <form method= "post" action="">
=======
        <form method= "post">
>>>>>>> f5b22fa4c0642e13555b9e73ce2e79a13aac1aeb

            <label for="typebagage">Type Bagage:</label>
            <select name="typebagage" id="typebagage">
                <option value="handbagage">Handbagage</option>
                <option value="ruimbagage">Ruimbagage</option>
            </select>

            <label for="kilo">Hoeveel Kilogram:</label>
            <input id="kilo" type="number" name="gewicht"  required>
                        
                    
              
            
            <input type="submit" value="Bagage inchecken">
        </form>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>