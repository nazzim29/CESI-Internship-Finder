var all_user;
var filtred_user =[];
var current_page;

function supr(id){
  var xhr = new XMLHttpRequest();
  xhr.responseType = 'json';
  xhr.open("GET","entreprise/delete/"+id);
  xhr.onload = function(){
    getall();
  }
  xhr.send();
}

function getall() {
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open("GET","../entreprise/recherche");
    xhr.onload = function() {
      if(xhr.status == 200 ){
        all_user = xhr.response;
        current_page = 1;
        showresult();
        makepagination();
      }else if(xhr.status == 220){
        all_user = null;
      }
    };
    xhr.send();
}
function changepage(var1){
  current_page = var1;
  showresult();
}
function makepagination(){
  var nbpage = Math.ceil(filtred_user / 8);
  var html = "";
  for(var i = 1;i<= nbpage;i++){
    var li = "<li class=\"pgnbr\" onclick=\"changepage("+i+")\"><a href=\"#\">"+i+"</a></li>";
    html+=li;
  }
  document.getElementById('pg').innerHTML = html;

}
function showresult(saha = null) {
  if(saha == null){
    filtred_user = all_user;
  }
  var html = "";
  console.log('hey');
  for(var i = (current_page-1)*8;i<current_page*8;i++){
    var card = "<div class=\"col-lg-3 col-md-6\"> <div class=\"card\"><div class=\"card-body\"><div class=\"col-lg-12 image\"><img src=\"../../Image/entreprise/";
    card+= filtred_user[i].Id_entreprise +".png\" alt=\"logo\" class=\"img-fluid rounded-circle w-50\"></div><ul class=\"info\"><li><a href=\"entreprise/"+filtred_user[i].Id_entreprise+"\"> ";
    card+= filtred_user[i].Raison_social +"</a></li><li>Secteur d'activité: ";
    card+= filtred_user[i].Secteur_activite +"</li><li>Localité: ";
    card+= filtred_user[i].Localite +"</li><li>Email: ";
    card+= filtred_user[i].Email +"</li></ul><div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\"><a href=\"entreprise/update/"+ all_user[i].Id_entreprise +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a></div><div class=\"p-1\"><a href=\"\" class=\"btnms\" onclick=\"supr("+all_user[i].Id_entreprise+")\"><i class=\"far fa-trash-alt\"></i></a></div></div></div></div></div>";
    html+=card;
    document.getElementById('jsresult').innerHTML = html;
  }

}
function nextpage(){
  if(current_page < Math.ceil(filtred_user.length / 8)){
    current_page++;
    showresult();
  }
}
function previouspage(){
  if(current_page >1){
    current_page--;
  }
}