<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Affichage</title>
    <!--fontawesomeCDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font -->
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="\CSS/rechercheentr.css">
</head>

<body onload="getall()" style="overflow-x: hidden;">
    {include 'navbar.tpl'}
    <div class="container">
        <h1 class="text-center">Recherche Entreprise</h1>
        <div class="input-group">
            <input type="search" id="sr" class="form-control rounded" placeholder="Rechercher une entreprise"
                aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="input-group-text border-0" id="search-addon">
                <i class="fa fa-search" id="search" onclick="chercher()"></i>
            </button>
            <!--bouton refresh-->
            <button type="button" class="input-group-text border-0" id="refresh" onclick="getrows()">
                <i class="fas fa-sync rotating"></i>
            </button>
        </div>
        <div class="row filter">
            <div class="col localite">
                <label>Localité</label>
                <ul id="loca">

                </ul>
            </div>
            <div class="col competences">
                <label>Secteur d'activité</label>
                <ul id="sec">
                
                </ul>
            </div>
        </div>
        <section id="entrecard">
            <div class="row" id="jsresult">

            </div>
        </section>    
    </div>
    <!--Pagination-->
    <div id="page" class="col-lg-12 p-4">
        <ul class="pagination justify-content-center">
            <li class="prev" onclick="previouspage()" id="prvbtn"><a href="#"><i class="fas fa-chevron-left"></i>
                    Précedent</a></li>
            <div style="display: flex;flex-direction: row;" id="pg">
            </div>
            <li class="next" onclick="nextpage()" id='nxtbtn'><a href="#">Suivant <i
                        class="fas fa-chevron-right"></i></a></li>

        </ul>
    </div>

    {include 'footer.tpl'}
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="\js/entrepriserech.js"></script>
   <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker
            .register('/sw.js')
            .then(registration => {
              console.log(`Service Worker enregistré!Ressource:${ registration.scope }`);
              })
            .catch(err => {
              console.log(`Echec de l'enregistrement du Service Worker: ${ err }`);
            });
        });
      }
    </script>
    <script>
        function show() {
            html = ""
            for(var i = (current_page-1)*8;i<current_page*8;i++){
                var element = filtred_rows[i];
                var card = "<div class=\"col-lg-3 col-md-6\"> <div class=\"card\"><div class=\"card-body\"><div class=\"col-lg-12 image\"><img src=\"../../Image/entreprise/";
                card+= element.Id_entreprise +".png\" alt=\"logo\" class=\"img-fluid rounded-circle w-50\"></div><ul class=\"info\"><li><a href=\"entreprise/"+element.Id_entreprise+"\"> ";
                card+= element.Raison_social +"</a></li><li>Secteur d'activité: ";
                card+= element.Secteur_activite +"</li><li>Localité: ";
                card+= element.Localite +"</li><li><a href=\"mailto:";
                card+= element.Email +"\">Email</a></li></ul><div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\">";
                
                {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx4',$_SESSION['current_user']['permission']))}        
                    card+="<a href=\"entreprise/update/"+ element.Id_entreprise +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a>";
                {/if}
                card+="</div><div class=\"p-1\">"
                {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx6',$_SESSION['current_user']['permission']))}        
                    card+="<a href=\"\" class=\"btnms\" onclick=\"supr("+element.Id_entreprise+")\"><i class=\"far fa-trash-alt\"></i></a>";
                {/if}
                card+="</div></div></div></div></div>";
                html+=card;
                document.getElementById('jsresult').innerHTML = html;
            }
        }
    </script>
    
</body>

</html>