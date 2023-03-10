<!-- (select vluchten) vertrektijd > SYSDATETIME() and -->
<?php
require_once 'db_connectie.php';
require_once 'business/header-footer.php';
require_once 'business/topVluchtenFunctie.php';
require_once 'business/laatVluchtAanmakenZien.php';
require_once 'business/checkMedewerker.php';
?>
<?php
global $verbinding;
$medewerker = checkMedewerker();
?>

        <?=
        getHeader("Vluchtenoverzicht");
        ?>
        
        <h1>Vluchtenoverzicht</h1>
        <p>Hier kunt u de komende vluchten inzien</p>
        <div class="filter">
            <form class= "searchbar" method="GET" action="vluchtenoverzicht.php">
                <input type="number" name="zoeken" placeholder="Zoeken"> 
                <input type="submit" value="Zoeken">
            </form>
            
            <div class="dropdown">
                <button class="dropbutton">Sorteren</button>
                <div class="content">
                    <a name="vertrektijd" href="vluchtenoverzicht.php">Tijd</a>
                    <a name="bestemming" href="vluchtenoverzicht.php?sorteren=maatschappijcode">Luchthaven</a>
                </div>
            </div>
        </div>
        <div style="overflow-x:auto;">
        <?=
        getVluchten($verbinding);
        ?>
        </div>
        <?=
        laatVluchtAanmakenZien($medewerker);
        ?>
        <?=
        getFooter();
        ?>
    </body>
</html>