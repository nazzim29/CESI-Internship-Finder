<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="Utilisateur.css">
    <title>Utilisateur</title>
</head>

<body>

    <div id="card">
        <div class="row">
            <div class="col-lg-4 col-md-12 profile" id="profile">
                <img id="thelogo" src="Image1.png" alt="User" />
            </div>
            <div class="col-lg-8 col-md-12 plus">
                <h1>{$user['Nom']|upper} {($user['Prenom']|lower)|capitalize}</h1>
                <ul>
                    <li>Crée par {$user['Createur']} </li>
                    <li>Prénom : </li>
                    <li>Email : </li>
                    <li><span class="role">admin</span></li>
                </ul>
            </div>
        </div>

        <div class="truc">
            <ul id="truc">
                <li><i class="far fa-bookmark"></i><span> A2</span></li>
                <li><i class="far fa-calendar-alt"></i> Ajouté le <span>14/05/2019</span></li>
                <li class="date"><i class="fas fa-eye"></i><span> 3</span> vues </li>
            </ul>


        </div>
        <div class="comment">
            <div class="row">
                <div class="col-lg-4">
                    <button class="btn">Ajouter nouveau</button>
                </div>
                <div class="col-lg-4">
                    <button class="btn">Afficher tous</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>