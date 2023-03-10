<?php
require_once '../applicatie/data/insertVlucht.php';
function newVlucht($verbinding, $nieuwvlucht){
    if (
    !empty($_POST['bestemming']) &&
    !empty($_POST['gatecode']) &&
    !empty($_POST['maxntl']) &&
    !empty($_POST['maxkgpp']) &&
    !empty($_POST['maxtotkg']) &&
    !empty($_POST['datum']) &&
    !empty($_POST['maatschappij'])
) {
        $bestemming = $_POST['bestemming'];
        $gate = $_POST['gatecode'];
        $maxntl = $_POST['maxntl'];
        $maxkgpp = $_POST['maxkgpp'];
        $maxtotkg = $_POST['maxtotkg'];
        $date = date("Y-m-d H:i:s", strtotime($_POST["datum"]));
        $maatschappij = $_POST['maatschappij'];

        insertVlucht($verbinding, $nieuwvlucht, $bestemming, $gate, $maxntl, $maxkgpp, $maxtotkg, $date, $maatschappij);

}
}
?>