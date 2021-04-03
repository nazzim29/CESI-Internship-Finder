<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Entreprise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="manifest" href="\manifest.json">
<link rel="apple-touch-icon" href="GHIS2-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../CSS/star_rating.css">
    <link rel="stylesheet" href="../../CSS/formstyle.css">
</head>

<body>
    {include 'navbar.tpl'}
    <div class="container">
        <form enctype="multipart/form-data" id="create" method="POST">
            <h1 id="titre">{if !isset($en)}Creation{else}Modification{/if} d'Entreprise</h1>
            {if isset($erreur)}
            <label>{$erreur}</label>
            {/if}
            <div class="row">
                <div class="form-group">
                    <label for="nom">Raison Sociale</label><br>
                    <input type="text" id="raison_sociale" name="raison_sociale" class="form-control" {if isset($en->Raison_social)} value = "{$en->Raison_social}"{/if} required>
                </div>

                <div class="form-group">
                    <label for="secteur">Secteur d'activité</label><br>
                    <input type="text" id="secteur" name="secteur_dactivite" class="form-control" {if isset($en->Secteur_activite)} value = "{$en->Secteur_activite}"{/if} required>
                </div>


                <div class="form-group">
                    <label for="adr">Localité</label><br>
                    <input type="text" id="adr" name="localite" class="form-control" {if isset($en->Localite)} value = "{$en->Localite}"{/if} required>
                </div>
                
                <div class="form-group">
                    <label for="email">Adresse Email</label><br>
                    <input type="email" id="email" name="email" class="form-control" {if isset($en->Email)} value = "{$en->Email}"{/if} required>
                </div>

                <div class="form-group">
                    <label for="nbr">Nombre de stagiaires CESI déjà acceptés</label><br>
                    <input type="number" id="nbr" name ="nbr" class="form-control" {if isset($en->Nb_stage)} value = "{$en->Nb_stage}"{/if} required>
                </div>
                <div class="form-group">
                    <label for="file">Uploader un logo</label><br>
                    <input type="file" id="file" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded">
                        <i class="fas fa-plus"></i> 
                        {if !isset($en)}Créer Entreprise{else}Enregistrer{/if}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!--footer-->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/star_rating.js"></script>
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
</body>


</html> 