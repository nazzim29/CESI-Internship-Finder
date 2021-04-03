<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="\CSS/star_profile.css">
    <link rel="stylesheet" href="\CSS/profile.css">
    <title>{$title}</title>
</head>

<body>
{include 'navbar.tpl'}
    <div id="card">
        <div class="row">
            <div class="col-md-4 col-sm-12 profile" id="profile">
                <img id="thelogo" src="../image/{$type}/{$info['id']}" alt="{($info['raison_sociale']|lower)|capitalize}" />
            </div>
            <div class="col-md-8 col-sm-12 plus" id="plus">
                <h1>{($info['raison_sociale']|lower)|capitalize}</h1>
                <ul>
                    <li>Secteur d'activité : {($info['Secteur_activite']|lower)|capitalize}</li>
                    <li>Localité : {($info['localite']|lower)|capitalize}</li>
                    <li>Email : <a href="mailto:{$info['email']}">{$info['email']}</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between align-items-center ">
            <div class="col-md-6 d-inline-flex align-items-center">
                <img id="user" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/225748/profile.jpg" alt="">
                <h5>{$_SESSION['current_user']['nom']|upper} {($_SESSION['current_user']['prenom']|lower)|capitalize}<span class="role">{($_SESSION['current_user']['type']|lower)|capitalize}</span></h5>
            </div>
            <div id="ratingsystem" class="col-md-6">
                <div class="rating-system">
                    <div class="stars-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                </div>
            </div>
        </div>
        <div id="area">
            <textarea cols="45" placeholder="Laisser un commentaire..."></textarea>
        </div>
        {if isset($comment)}
            {foreach $comment as $comm}   
                <div class="comment mt-2"> <img src="../image/{$comm['type']}/{$comm['id_utilisateur']}" alt="" class="rounded-circle" width="40" height="40">
                    <h6>{$comm['nom']|upper} {($comm['prenom']|lower)|capitalize}</h6> <span class="role">{($comm['type']|lower)|capitalize}</span> <span class="d-inline-block">- {$comm['date']}</span>
                    <label>
                        {for $i = 1 to 5}
                            {if $comm['note'] >= $i}
                                <i class="fas fa-star" style="font-color:yellow;"></i>
                            {else}
                                <i class="fas fa-star" style="font-color:grey;"></i>
                            {/if}                  
                        {/for}
                    </label>
                    <p>{$comm['commentaire']}</p>
                </div>
            {/foreach}
        {/if}
    </div>
    {include 'footer.tpl'}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>