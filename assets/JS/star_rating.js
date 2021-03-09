
$('input[type = radio][name=rate]').on('change',function(){
    switch(this.value){
        case "1":
            document.getElementById("ressenti").innerHTML= "ana w yasmine mechi ga3 fort";
            break;
        case "2":
            document.getElementById("ressenti").innerHTML= "ana w yasmine mchi fort";
            break;
        case "3":
            document.getElementById("ressenti").innerHTML= "ana w yasmine chwia fort";
            break;
        case "4":
            document.getElementById("ressenti").innerHTML= "ana w yasmine  fort";
            break;
        case "5":
            document.getElementById("ressenti").innerHTML= "ana w yasmine fort bzf";
            break;
    }
    $('#comm').show();  
});
$('#comm').hide();