<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targets</title>
<style>
    .gallery{
        width:100vw;
        display:flex;
        flex-direction:row;
        flex-wrap: wrap;
    }
    .photo_container{
        width:320px;
        display: flex;
        flex-direction:column;
        margin:10px;
        align-items: center;
        padding:20px 5px;
        text-decoration: none;
        font-weight: bold;
        color:#333;
        border-radius:5px;
        transition:0.3s;
    }
    .photo_container:hover{
        transform: scale(1.02);
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        background:#eeefff;
    }
    .photo_container img{
        border-radius:5px;
    }
    .photo_container span{
        font-size:15px;
        font-family: arial;
        margin-top:20px;
        width:300px;
        text-align:center;
    }
</style>
</head>
<body>
    <div class="gallery">
        <?php
            $list = scandir("photos");
            for($i=3; $i < count($list); $i++) {
            $name = $list[$i];
            echo "<div  class='photo_container'>
                <a href='photos/$name' target='_blank'><img src='photos/$name' width='300'></a>
                <span>$name</span>
                <span><a href='delete.php?photo=$name'>Delete</a></span>
            </div>";
        }
        ?>
    </div> 
</body>
</html>