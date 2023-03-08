<?php
require_once 'db_connectie.php';
require_once 'functies/header-footer.php';

$psgnummer = $_GET['psgnummer'];

$query = 'select P.passagiernummer, P.naam, V.max_gewicht_pp, M.max_objecten_pp, MAX(B.objectvolgnummer) as max_object_nummer, SUM(b.gewicht) as gewicht_bagage
            from passagier P 
            join Vlucht V on P.vluchtnummer = V.vluchtnummer
            join BagageObject B on p.passagiernummer = b.passagiernummer
            join Maatschappij M on V.maatschappijcode = M.maatschappijcode
            group by P.passagiernummer, P.naam, V.max_gewicht_pp, M.max_objecten_pp
            having p.passagiernummer = ?';
$data = $verbinding->prepare($query);
$data->execute([$psgnummer]);
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
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zelfservice</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <?=
        getHeader();
        ?>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>Hier kan<?php echo $psgnummer?> inchecken</p>
        </div>
        <div class="form">
        <form action="begin.html">
            
                <label for="typebagage">Type Bagage:</label>
                <select name="typebagage" id="typebagage">
                    <option value="handbagage">Handbagage</option>
                    <option value="ruimbagage">Ruimbagage</option>
                </select>

                <label for="kilo">Hoeveel Kilogram:</label>
                <input id="kilo" type="number" name="gewicht"  required>
                
                <input type="submit" value="Inchecken">
            </form>
        </div>
        <?=
        getFooter();
        ?>
    </body>
</html>