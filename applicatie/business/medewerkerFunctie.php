<!-- alvast voorbereiding voor als er verandering in medewerker.php komt -->
<?php
function medewerker($passagier){
    if ($passagier){
        return '
            <a href="vluchtenoverzicht.php" class="medewerker">Wilt u vluchten inzien?</a>
            <a href="passagierdetail.php" class="medewerker">Wilt u passagierdetails inzien?</a>
            <a href="bagageinchecken.php" class="medewerker">Wilt u de bagage van passagier inchecken?</a>
            <a href="vluchtAanmaken.php" class="medewerker">Wilt u een nieuwe vlucht aanmaken?</a>
        ';
    }
    else {
        return '
            <a href="vluchtenoverzicht.php" class="medewerker">Wilt u vluchten inzien?</a>
            <a href="vluchtAanmaken.php" class="medewerker">Wilt u een nieuwe vlucht aanmaken?</a>
            <a href="passagieroverzicht.php" class="medewerker">Wilt u een passagier zoeken?</a>
        ';
    }
}
?>