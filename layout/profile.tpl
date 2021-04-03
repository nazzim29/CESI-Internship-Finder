<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="\css/Utilisateur.css">
    <title>Utilisateur</title>
</head>

<body>
{include "navbar.tpl"}
    <div id="card">
        <div class="row">
            <div class="col-lg-4 col-md-12 profile" id="profile">
                <img id="thelogo" src="\image/{$user['Type']|lower}/{$user['Id_utilisateur']}.png" alt="User" />
            </div>
            <div class="col-lg-8 col-md-12 plus">
                <div class="row" style="align-items:center;">
                    <h1>{$user['Nom']|upper} {($user['Prenom']|lower)|capitalize}</h1>

                    <span class="role" style="height: fit-content;margin-left: 10px;">{($user['Type']|lower)|capitalize}</span>
                </div>
                
                <ul>
                    {if isset($user['Createur'])}
                    <li>Crée par {$user['Createur']} </li>
                    {/if}
                    <li><a style="height:fit-content;width:50%" class="btn" href="mailto:{$user["Email"]}">Envoyer un email</a></li>
                </ul>
            </div>
        </div>

        <div class="truc">
            <ul id="truc">
                <li><i class="far fa-bookmark"></i><span> A2</span></li>
                <li><i class="far fa-calendar-alt"></i> Ajouté le <span>{$user['Date_creation']|date_format:"%d %b %Y à %H:%M"}</span> </li>
                <li class="date"><i class="fas fa-eye"></i><span> {$user['Nb_visite']}</span> vues </li>
            </ul>


        </div>
        <div class="comment">
            <div class="row">
                {if $user['Type'] eq "PILOTE"}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx15',$_SESSION['current_user']['permission']))}
                        <div class="col-lg-4">
                            <a href="\{$user['Type']|lower}/update/{$user['Id_utilisateur']}" class="btn">Modifier</a>
                        </div>
                    {/if}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx16',$_SESSION['current_user']['permission']))}
                    <div class="col-lg-4">
                        <a href="\{$user['Type']|lower}/delete/{$user['Id_utilisateur']}"class="btn">Supprimer</a>
                    </div>
                    {/if}
                {elseif $user['Type'] eq "DELEGUE"}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx19',$_SESSION['current_user']['permission']))}
                        <div class="col-lg-4">
                            <a href="\{$user['Type']|lower}/update/{$user['Id_utilisateur']}" class="btn">Modifier</a>
                        </div>
                    {/if}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx20',$_SESSION['current_user']['permission']))}
                    <div class="col-lg-4">
                        <a href="\{$user['Type']|lower}/delete/{$user['Id_utilisateur']}"class="btn">Supprimer</a>
                    </div>
                    {/if}
                {elseif $user['Type'] eq "DELEGUE"}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx24',$_SESSION['current_user']['permission']))}
                        <div class="col-lg-4">
                            <a href="\{$user['Type']|lower}/update/{$user['Id_utilisateur']}" class="btn">Modifier</a>
                        </div>
                    {/if}
                    {if $_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type']== 'DELEGUE' & array_search('sfx25',$_SESSION['current_user']['permission']))}
                    <div class="col-lg-4">
                        <a href="\{$user['Type']|lower}/delete/{$user['Id_utilisateur']}"class="btn">Supprimer</a>
                    </div>
                    {/if}
                {/if}
            </div>
        </div>
    </div>
    </div>
    {include 'footer.tpl'}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>