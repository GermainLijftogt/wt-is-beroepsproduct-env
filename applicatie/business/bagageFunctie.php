<!-- op deze pagina worden alle functies gemaakt die data uit de database halen -->
<?php
require_once '../applicatie/data/bagageQuery.php';
function Bagageincheckenquery($psg, $verbinding){
    $row = bagageSelectQuery($verbinding,$psg);

    $naam = $row['naam'];
    $max_gewicht_pp = $row['max_gewicht_pp'];
    $max = $row['max_objecten_pp'];
    $objects = $row['max_object_nummer']+1;
    $tot_gewicht_bagage = $row['gewicht_bagage'];


    if(!empty($_POST['gewicht'])) {
        $gewicht = $_POST['gewicht'];
        if($tot_gewicht_bagage + $gewicht <= $max_gewicht_pp){
            bagageInsertQuery($verbinding,$psg, $objects, $gewicht);
        }
    }
    return $naam;
}
?>