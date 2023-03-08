<!-- op deze pagina worden alle functies gemaakt die data uit de database halen -->
<?php
require_once 'db_connectie.php';

function Bagageincheckenquery($psg, $verbinding){
    
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

return $row;
    $naam = $row['naam'];
    $max_gewicht_pp = $row['max_gewicht_pp'];
    $max = $row['max_objecten_pp'];
    $objects = $row['max_object_nummer']+1;
    $tot_gewicht_bagage = $row['gewicht_bagage'];


    if(!empty($_POST['gewicht'])) {
        echo 'het lukt';
        $gewicht = $_POST['gewicht'];
        if($tot_gewicht_bagage + $gewicht <= $max_gewicht_pp){
            echo 'bagage lukt';

            $query1 = 'INSERT INTO BagageObject (passagiernummer, objectvolgnummer, gewicht)
                            VALUES (?, ?, ?)';
            $sql = $verbinding->prepare($query1);
            $sql->execute([$psg, $objects, $gewicht]);
        }
    }
    return $naam;
}
?>