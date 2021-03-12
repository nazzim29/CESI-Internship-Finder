$("#loader").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
    if(document.readyState === 'complete'){
        $("#loader").remove();
    }
});
document.addEventListener("load",function(){
    if($("#loader").isnot(":animated")){
        $("#loader").remove();
    }
})