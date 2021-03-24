$("#loader").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
    if(document.readyState === 'complete'){
        $("#loader").remove();
    }
});
document.addEventListener("load",function(){
    if($("#loader").isnot(":animated")){
        $("#loader").remove();
    }
});
$(document).ready(function(){
    //For page load
    //$('#cookie-banner').toggleClass('show');
    setTimeout(function(){
        $('#cookie-banner').addClass('show');
    }, 100);
    //Hide banner
    $('.cookie-banner .button').click(function(){
      $('#cookie-banner').removeClass('show');
    });
    
    //Show top banner fixed
    $('#show-top-full').click(function(){
      $('#cookie-banner').removeClass();
      $('#cookie-banner').addClass('cookie-banner');
      $('#cookie-banner').addClass('full');
      $('#cookie-banner').addClass('top');
      setTimeout(function(){
        $('#cookie-banner').addClass('show');
      }, 100);
    });
    
    //Show top banner highlight
    $('#show-top-highlight').click(function(){
      $('#cookie-banner').removeClass();
      $('#cookie-banner').addClass('cookie-banner');
      $('#cookie-banner').addClass('highlight');
      $('#cookie-banner').addClass('top');
      setTimeout(function(){
        $('#cookie-banner').addClass('show');
      }, 100);
    });
    
    //Bottom banner fixed
    $('#show-bottom-full').click(function(){
      
    });
    
    //Bottom banner highlighted
    $('#show-bottom-highlight').click(function(){
      $('#cookie-banner').removeClass();
      $('#cookie-banner').addClass('cookie-banner');
      $('#cookie-banner').addClass('highlight');
      $('#cookie-banner').addClass('bottom');
      setTimeout(function(){
        $('#cookie-banner').addClass('show');
      }, 100);
    });
  });