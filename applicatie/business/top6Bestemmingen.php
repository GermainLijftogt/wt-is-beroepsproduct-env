<?php
require_once '../applicatie/data/top6BQuery.php';
function returnBestemming($verbinding){
    $bestemmingen = '';
    $dataB = top6Bestemmingen($verbinding);
    while($rijB = $dataB->fetch()){
        $bestemming = $rijB['bestemming'];
        $aantal_vluchten = $rijB['aantal_vluchten'];
        $bestemmingen = $bestemmingen . '
        <div>
            <img src="Images/'.$bestemming.'.jpg" alt="foto van Bestemming">
            <h3>'.$bestemming.'</h3>
        </div>
        ';
    }
    return $bestemmingen;
}
?>