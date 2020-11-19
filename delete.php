<?php
    $photo=$_GET['photo'];
    $f = "photos/".$photo;
    if( file_exists($f)) unlink($f);

    header("location:targets.php");
?>