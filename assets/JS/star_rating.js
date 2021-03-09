
$('input[type = radio][name=rate]').on('change',function(){
    switch(this.value){
        case "1":
            document.getElementById("ressenti").innerHTML= "NUL";
            break;
        case "2":
            document.getElementById("ressenti").innerHTML= "ASSEZ BIEN";
            break;
        case "3":
            document.getElementById("ressenti").innerHTML= "BIEN";
            break;
        case "4":
            document.getElementById("ressenti").innerHTML= "EXCELLENT";
            break;
        case "5":
            document.getElementById("ressenti").innerHTML= "PARFAIT";
            break;
    }
    $('#comm').show();  
});
$('#comm').hide();