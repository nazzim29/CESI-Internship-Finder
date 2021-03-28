var all_user;





function getall() {
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open("GET","entreprise/recherche");
    
    xhr.onload = function() {
      if(xhr.status == 200 ){
        all_user = xhr.response;
        console.log(all_user);
      }else if(xhr.status == 220){
        alluser = null;
      }
    };
    xhr.send();
    //showresult();
}