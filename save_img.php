<?php
$picture = $_POST['picture'];
$data = explode( ',', $picture );
$new_photo = fopen("photos/target_at".date('(M-d-Y|h:i:s)',time()).".png", "w");
fwrite($new_photo, base64_decode($data[ 1 ]));
fclose($new_photo);

