<?php
$picture = $_POST['picture'];
$name=$_POST['name'];
$data = explode( ',', $picture );
$new_photo = fopen("photos/".$name."_".date('(M-d-Y | h:i:s)',time()).".png", "w");
fwrite($new_photo, base64_decode($data[ 1 ]));
fclose($new_photo);

