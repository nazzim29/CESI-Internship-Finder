
$('input[type = radio][name=rate]').on('change',function(){
    switch(this.value){
        case "1":
            document.getElementById("ressenti").innerHTML= "BAD";
            break;
        case "2":
            document.getElementById("ressenti").innerHTML= "Pretty good";
            break;
        case "3":
            document.getElementById("ressenti").innerHTML= "GOOD";
            break;
        case "4":
            document.getElementById("ressenti").innerHTML= "EXCELLENT";
            break;
        case "5":
            document.getElementById("ressenti").innerHTML= "PERFECT";
            break;
    }
    $('#comm').show();  
});
$('#comm').hide();