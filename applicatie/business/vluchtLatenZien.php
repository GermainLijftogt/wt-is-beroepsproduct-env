<?php
require_once '../applicatie/data/vluchtOphalen.php';
function laatVluchtZien($verbinding){
    if(isset($_GET['vluchtnummer'])){
        
        $vluchtnummer = $_GET['vluchtnummer'];
        $row = vluchtOphalen($verbinding, $vluchtnummer);
        

        $bestemming = $row['bestemming'];
        $gatecode = $row['gatecode'];
        $plekken_over = $row['plekken_over'];
        $vertrektijd = $row['vertrektijd'];
        $maatschappijcode = $row['maatschappijcode'];
        
        $vluchtinfo = '
            <h1>Vluchtgegevens</h1>
            <p>Vluchtnummer: '.$vluchtnummer.'</p>
            <p>Bestemming: '.$bestemming.'</p>
            <p>Gate: '.$gatecode.'</p>
            <p>plekken over: '.$plekken_over.'</p>
            <p>Vertrektijd: '.$vertrektijd.'</p>
            <p>Vliegmaatschappij: '.$maatschappijcode.'</p>
            ';
        if(isset($_SESSION['login'])){
            if(!isset($_SESSION['psgnummer'])){
                $vluchtinfo = $vluchtinfo .'
            <a href="nieuwePassagier.php?vluchtnummer='.$vluchtnummer.'" class="newpsg">Passagier toevoegen</a>
            ';
            }
        }
        $vluchtinfo = $vluchtinfo . '
        <img src="Images/'.$maatschappijcode.'.jpg" alt="Vliegtuig van '.$maatschappijcode.'">
        ';
        return $vluchtinfo;
    } else{
        header ('location: ../applicatie/vluchtenoverzicht.php');
    }
    
}
?>