<?php
function getTop25Vluchten($verbinding, $zoek, $sorteren){
    $query = 'select TOP (25) vluchtnummer, vertrektijd, bestemming, gatecode, maatschappijcode
from Vlucht
where vluchtnummer like  ? AND vertrektijd > SYSDATETIME()
order by '.$sorteren.' ASC
';
$data = $verbinding->prepare($query);
$data->execute(['%' . $zoek . '%']);
return $data;
}
?>