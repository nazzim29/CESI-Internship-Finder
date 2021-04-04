var all_rows;
var filtred_rows;
var current_page;
var type;
function supr(id){
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open("GET","/"+type+"/delete/"+id);
    xhr.onload = function(){
      getall();
    }
    xhr.send();
  }
function getrows(params) {
    type = params;
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open("GET","/"+ params+"/recherche");
    xhr.onload = function() {
      if(xhr.status == 200 ){
          all_rows = xhr.response;
          console.log(xhr.response);
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
    let promotion = new Set();
    let centre = new Set();
    all_rows.forEach(element => {
        promotion.add(element.Promotion);
        centre.add(element.Centre);
    });
    promotion = Array.from(promotion);
    centre = Array.from(centre);
    document.getElementById('promo').innerHTML = "";
    promotion.forEach(element => {
        document.getElementById('promo').innerHTML += "<li><input type=\"checkbox\" name=\"promotion\" onclick=\"filter()\" value=\""+ element +"\" >"+ element +"</li>";
    });
    document.getElementById('centre').innerHTML = "";
    centre.forEach(element => {
        document.getElementById('centre').innerHTML += "<li><input type=\"checkbox\" name=\"centre\" onclick=\"filter()\" value=\""+ element +"\">"+ element +"</li>";
    });
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
    let tabl = $("input:checkbox[name=promotion]:checked");
    let tabs = $("input:checkbox[name=centre]:checked");
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
            if((l.length == 0 | l.includes(element.Promotion)) & (s.length == 0 | s.includes(element.Centre))){
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
function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }