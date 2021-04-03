<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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

    <link rel="stylesheet" href="../CSS/rechercheentr.css">
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
            <button type="button" class="input-group-text border-0" id="refresh" value="Actualiser">
                <i class="fas fa-sync rotating"></i>
            </button>
        </div>
        <div class="row filter">
            <div class="col localite">
                <label>Localité</label>
                <ul class="loca">
                    <li><input type="checkbox"> Alger</li>
                    <li><input type="checkbox"> Oran</li>
                    <li><input type="checkbox"> Rouen</li>
                    <li><input type="checkbox"> Paris</li>
                </ul>
            </div>

            <div class="col competences">
                <label>Compétences</label>
                <ul class="comp">
                    <li><input type="checkbox"> HTML</li>
                    <li><input type="checkbox"> CSS</li>
                    <li><input type="checkbox"> JAVA</li>
                    <li><input type="checkbox"> mobile</li>
                </ul>
            </div>
            <div class="col competences">
                <label>Secteur d'activité</label>
                <ul class="comp">
                    <li><input type="checkbox"> Informatique</li>
                    <li><input type="checkbox"> Réseau</li>
                    <li><input type="checkbox"> Communication</li>
                    <li><input type="checkbox"> Industrie</li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/entrepriserech.js"></script>

</body>

</html>