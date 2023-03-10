<?php
function insertVlucht($nieuwvlucht, $bestemming, $gate, $maxntl, $maxkgpp, $maxtotkg, $data, $maatschappij){
$query1 = 'INSERT INTO Vlucht (vluchtnummer, bestemming, gatecode, max_aantal, max_gewicht_pp, max_totaalgewicht, vertrektijd, maatschappijcode)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                        ';
        $sql = $verbinding->prepare($query1);
        
        $sql->execute([$nieuwvlucht, $bestemming, $gate, $maxntl, $maxkgpp, $maxtotkg, $date, $maatschappij]);
}
?>