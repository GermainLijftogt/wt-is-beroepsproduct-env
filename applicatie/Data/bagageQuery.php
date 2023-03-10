<?php
function bagageSelectQuery($verbinding,$psg){
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
}  
function bagageInsertQuery($verbinding,$psg,$objects,$gewicht){
    $query1 = 'INSERT INTO BagageObject (passagiernummer, objectvolgnummer, gewicht)
                            VALUES (?, ?, ?)';
            $sql = $verbinding->prepare($query1);
            $sql->execute([$psg, $objects, $gewicht]);
}
?>
