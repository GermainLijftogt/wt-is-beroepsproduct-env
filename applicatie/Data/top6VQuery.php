<?php
function top6Vluchten($verbinding){
    $queryV = '
    select TOP(6) vluchtnummer, vertrektijd, gatecode, maatschappijcode
    from Vlucht
    where vertrektijd > SYSDATETIME()
    order by vertrektijd ASC
    ';
    $dataV = $verbinding->query($queryV);
    return $dataV;
}
?>