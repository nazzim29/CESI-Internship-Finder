var all_rows;
var filtred_rows;
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
$(document).ready(function() {
  getrows();
});
function getrows() {
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open("GET","\entreprise/recherche");
    xhr.onload = function() {
      if(xhr.status == 200 ){
        all_rows = xhr.response;
        current_page = 1;
        filtred_rows = all_rows;
        makefilter();
        makepagination();
        show();
      }
    };
    xhr.send();
}
function makefilter() {
    let localite = new Set();
    let secteur = new Set();
    all_rows.forEach(element => {
        localite.add(element.Localite);
        secteur.add(element.Secteur_activite);
    });
    localite = Array.from(localite);
    secteur = Array.from(secteur);
    document.getElementById('loca').innerHTML = "";
    localite.forEach(element => {
        document.getElementById('loca').innerHTML += "<li><input type=\"checkbox\" name=\"localite\" onclick=\"filter()\" value=\""+ element +"\" >"+ element +"</li>";
    });
    document.getElementById('sec').innerHTML = "";
    secteur.forEach(element => {
        document.getElementById('sec').innerHTML += "<li><input type=\"checkbox\" name=\"secteur\" onclick=\"filter()\" value=\""+ element +"\">"+ element +"</li>";
    });
}
function show() {
    html = ""
    for(var i = (current_page-1)*8;i<current_page*8;i++){
        var element = filtred_rows[i];
        var card = "<div class=\"col-lg-3 col-md-6\"> <div class=\"card\"><div class=\"card-body\"><div class=\"col-lg-12 image\"><img src=\"../../Image/entreprise/";
        card+= element.Id_entreprise +".png\" alt=\"logo\" class=\"img-fluid rounded-circle w-50\"></div><ul class=\"info\"><li><a href=\"entreprise/"+element.Id_entreprise+"\"> ";
        card+= element.Raison_social +"</a></li><li>Secteur d'activité: ";
        card+= element.Secteur_activite +"</li><li>Localité: ";
        card+= element.Localite +"</li><li><a href=\"mailto:";
        card+= element.Email +"\">Email</a></li></ul><div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\"><a href=\"entreprise/update/"+ element.Id_entreprise +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a></div><div class=\"p-1\"><a href=\"\" class=\"btnms\" onclick=\"supr("+element.Id_entreprise+")\"><i class=\"far fa-trash-alt\"></i></a></div></div></div></div></div>";
        html+=card;
        document.getElementById('jsresult').innerHTML = html;
    }
}
function makepagination() {
    var nbpage = Math.ceil(filtred_rows.length / 8);
    var html = "";
    for(var i = 1;i<= nbpage;i++){
      var li = "<li class=\"pgnbr\" onclick=\"changepage("+i+")\"><a href=\"#\">"+i+"</a></li>";
      html+=li;
    }
    document.getElementById('pg').innerHTML = html;
    
}
function changepage(var1){
    current_page = var1;
    show();
}
function nextpage(){
    if(current_page < Math.ceil(filtred_rows.length / 8)){
        current_page++;
        show();
    }
}
function previouspage(){
    if(current_page >1){
        current_page--;
        show();
    }
}
$('#sr').on('input',function(e){
    chercher();
});
function filter(){

    console.log(all_rows);
    var l = [];
    var s = [];
    let f = new Set();
    filtred_rows = all_rows;
    let tabl = $("input:checkbox[name=localite]:checked");
    let tabs = $("input:checkbox[name=secteur]:checked");
    if(tabl.length == 0 & tabs == 0){
        filtred_rows = all_rows;
    }else{
        tabl.each(function(){
            l.push($(this).val());
        });
        tabs.each(function(){
            s.push($(this).val());
        });
        all_rows.forEach(element => {
            if((l.length == 0 | l.includes(element.Localite)) & (s.length == 0 | s.includes(element.Secteur_activite))){
                f.add(element);
            }
        });
        filtred_rows = Array.from(f);
    }
    makepagination();
    current_page = 1;
    show();
}

function chercher() {
    var q = document.getElementById('sr').value;
    let f = new Set();
    if(q == null){
        filtred_rows = all_rows;
    }else{
        all_rows.forEach(element => {
            if(element.Raison_social.toLowerCase().search(q.toLowerCase()) != (-1)){
                f.add(element);
            }
        });
        filtred_rows = Array.from(f);
        makepagination();
    }
    current_page = 1;
    show();
}