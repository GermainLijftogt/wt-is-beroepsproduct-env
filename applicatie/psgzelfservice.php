<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';

if(!empty($_GET['psgnummer'])){
    $psgnummer = $_GET['nummer'];
}
?>

        <?=
        getHeader("Zelfservice");
        ?>
        <div class="zelfservice">
            <h1>Zelfservice Inchecken</h1>
            <p>hier kan u uzelf inchecken</p>
        </div>
        <div class="form">
        <form method="GET" action="zelfservice.php?psgnummer=<?php $vluchtnummer;?>">

            <label for="psgnummer">Uw passagiersnummer:</label>
            <input id="psgnummer" placeholder="11111" type="number" name="psgnummer" required>
                
            <input type="submit" value="Verder">
        </form>
        <?=
        getFooter();
        ?>
    </body>
</html>