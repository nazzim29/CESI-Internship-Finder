<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="\CSS/formstyle.css">
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    {include 'navbar.tpl'}
    <div class="container">
        <form id="create" action="" enctype="multipart/form-data" method="POST">
            <h1 id="titre">Créer un {($type|lower)|capitalize}</h1>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" class="form-control" required {if isset($user)}value="{$user['Nom']}"{/if}>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label><br>
                    <input type="text" id="prenom" name="prenom" class="form-control" required {if isset($user)}value="{$user['Prenom']}"{/if}>
                </div>

                <div class="form-group">
                    <label for="email">Email </label><br>
                    
                    <input type="email" id="email" name="email" class="form-control" required {if isset($user)}value="{$user['Email']}"{/if}>
                </div>

                <div class="form-group">
                    <label for="pass">Mot de passe</label><br>
                    <input type="password" id="pass" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label for="centre">Centre</label><br>
                    <select id="centre" name="centre" class="form-select form-control" required>
                        {foreach $centres as $c}
                            <OPTION class="op" value="{$c["Id_centre"]}" {if isset($user) and $c['Id_centre'] eq $user['Id_centre']} selected{/if}>{$c["Nom"]}
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="promo">Promotion</label><br>
                    <SELECT id="promo" class="form-select form-control" name="promo" size="1" >
                        <OPTION class="op" {if isset($user) and $user["Promotion"] eq "A1"}selected{/if}>A1
                        <OPTION class="op"{if isset($user) and $user["Promotion"] eq "A2"}selected{/if}>A2
                        <OPTION class="op"{if isset($user) and $user["Promotion"] eq "A3"}selected{/if}>A3
                        <OPTION class="op"{if isset($user) and $user["Promotion"] eq "A4"}selected{/if}>A4
                        <OPTION class="op"{if isset($user) and $user["Promotion"] eq "A5"}selected{/if}>A5
                    </SELECT>
                </div>
                <div class="form-group">
                    <label for="photo">Photo de profile</label><br>
                    <input type="file" name="photo" class="form-control" >
                </div>
                {if $type eq 'DELEGUE' and ($_SESSION['current_user']['type'] eq "PILOTE" or  $_SESSION['current_user']['type'] eq "ADMIN")}
                <label>Droits attribués</label>
                <!--Permission délégués-->
                <div id="permission" class="row">
                    <div class="col">
                        <label id="gentr">Gestion Entreprise</label>
                        <div id="list1">
                            <ul class="items">
                                <li><input type="checkbox" class="rech" name="permission[]" value="2" {if isset($permission) and array_search('2',$permission) !== false}checked{/if}/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]" value="3" {if isset($permission) and array_search('3',$permission) !== false}checked{/if}/>Créer</li>
                                <li><input type="checkbox" class="modif" name="permission[]"  value="4" {if isset($permission) and array_search('2',$permission) !== false}{else}disabled{/if}{if isset($permission) and array_search('4',$permission) !== false} checked{/if}/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" value="5" {if isset($permission) and array_search('5',$permission)!== false}checked{/if}/>Evaluer</li>
                                <li><input type="checkbox" class="supr" name="permission[]" {if isset($permission) and array_search('2',$permission) !== false}{else}disabled{/if} value="6"{if isset($permission) and array_search('6',$permission) !== false}checked{/if}/>Supprimer</li>
                                <li><input type="checkbox" name="permission[]" value="7"{if isset($permission) and array_search('7',$permission)!== false}checked{/if}/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="goffr">Gestion Offres</label>
                        <div id="list2">
                            <ul class="items">
                                <li><input type="checkbox" class="rech" name="permission[]" value="8"{if isset($permission) and array_search('8',$permission)!== false}checked{/if}/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]" value="9"{if isset($permission) and array_search('9',$permission)!== false}checked{/if}/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" {if isset($permission) and array_search('8',$permission)!== false}{else}disabled{/if} value="10" {if isset($permission) and array_search('10',$permission)!== false}checked{/if}/>Modifier</li>
                                <li><input type="checkbox"  name="permission[]" class="supr" {if isset($permission) and array_search('8',$permission)!== false}{else}disabled{/if} value="11" {if isset($permission) and array_search('11',$permission)!== false}checked{/if}/>Supprimer</li>
                                <li><input type="checkbox"  name="permission[]" value="12" {if isset($permission) and array_search('12',$permission)!== false}checked{/if}/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="getu">Gestion Etudiants</label>
                        <div id="list3">
                            <ul class="items">
                                <li><input type="checkbox"  name="permission[]" class="rech" value="22" {if isset($permission) and array_search('22',$permission)!== false}checked{/if}/>Rechercher </li>
                                <li><input type="checkbox"  name="permission[]" value="23" {if isset($permission) and array_search('23',$permission)!== false}checked{/if}/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" value="24" {if isset($permission) and array_search('22',$permission)!== false}{else}disabled{/if} {if isset($permission) and array_search('24',$permission)!== false}checked{/if}/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" {if isset($permission) and array_search('22',$permission)!== false}{else}disabled{/if} value="25" {if isset($permission) and array_search('25',$permission)!== false}checked{/if}/>Supprimer</li>
                                <li><input type="checkbox" name="permission[]" value="26" {if isset($permission) and array_search('26',$permission)!== false}checked{/if}/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gdel">Gestion Délegués</label>
                        <div id="list4">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" class="rech" value="17" {if isset($permission) and array_search('17',$permission)!== false}checked{/if}/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]"  value="18" {if isset($permission) and array_search('18',$permission)!== false}checked{/if}/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" {if isset($permission) and array_search('17',$permission)!== false}{else}disabled{/if} value="19" {if isset($permission) and array_search('19',$permission)!== false}checked{/if}/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" {if isset($permission) and array_search('17',$permission)!== false}{else}disabled{/if} value="20" {if isset($permission) and array_search('20',$permission)!== false}checked{/if}/>Supprimer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gpil">Gestion Pilotes</label>
                        <div id="list5">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" class="rech" value="13" {if isset($permission) and array_search('13',$permission)!== false}checked{/if}/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]"  value="14" {if isset($permission) and array_search('14',$permission)!== false}checked{/if}/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" {if isset($permission) and array_search('13',$permission)!== false}{else}disabled{/if} value="15" {if isset($permission) and array_search('15',$permission)!== false}checked{/if}/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" {if isset($permission) and array_search('13',$permission)!== false}{else}disabled{/if} value="16" {if isset($permission) and array_search('16',$permission)!== false}checked{/if}/>Supprimer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gcand">Gestion Candidatures</label>
                        <div id="list6">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" value="32" {if isset($permission) and array_search('32',$permission)!== false}checked{/if}/>Avancement step 3</li>
                                <li><input type="checkbox" name="permission[]"value="33" {if isset($permission) and array_search('33',$permission)!== false}checked{/if}/>Avancement step 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/if}
                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded"><i class="fas fa-plus"></i> Créer un
                        utilisateur
                    </button>
                </div>
            </div>
        </form>
    </div>

{include 'footer.tpl'}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {if $type eq "DELEGUE" and ($_SESSION['current_user']['type'] eq "PILOTE" or  $_SESSION['current_user']['type'] eq "ADMIN")}
    <script>
        $('#gentr').on('click',function(){
            $('#list1 input').prop('checked', false);
            $('#list1 .modif,#list1 .supr').attr('disabled',true);
            $('#list1').toggle(200);
        });
        $('#gpil').on('click',function(){
            $('#list5 input').prop('checked', false);
            $('#list5 .modif,#list5 .supr').attr('disabled',true);
            $('#list5').toggle(200);
        });
        $('#goffr').on('click',function(){
            $('#list2 .modif,#list2 .supr').attr('disabled',true);
            $('#list2 input').prop('checked', false);
            $('#list2').toggle(200);
        });
        $('#getu').on('click',function(){
            $('#list3 .modif,#list3 .supr').attr('disabled',true);
            $('#list3 input').prop('checked', false);
            $('#list3').toggle(200);
        });
        $('#gdel').on('click',function(){
            $('#list4 .modif,#list4 .supr').attr('disabled',true);
            $('#list4 input').prop('checked', false);
            $('#list4').toggle(200);
        });
        $('#gcand').on('click',function(){
            $('#list6 .modif,#list6 .supr').attr('disabled',true);
            $('#list6 input').prop('checked', false);
            $('#list6').toggle(200);
        });
        $('#list1 .rech').on('change',function(){
            if($('#list1 .rech').is(':checked')){
                $('#list1 .modif,#list1 .supr').removeAttr('disabled');
            }else{
                $('#list1 .modif,#list1 .supr').attr('disabled',true);
                $('#list1 .modif,#list1 .supr').prop('checked', false)
            }
        });
        $('#list2 .rech').on('change',function(){
            if($('#list2 .rech').is(':checked')){
                $('#list2 .modif,#list2 .supr').removeAttr('disabled');
            }else{
                $('#list2 .modif,#list2 .supr').attr('disabled',true);
                $('#list2 .modif,#list2 .supr').prop('checked', false)
            }
        });
        $('#list3 .rech').on('change',function(){
            if($('#list3 .rech').is(':checked')){
                $('#list3 .modif,#list3 .supr').removeAttr('disabled');
            }else{
                $('#list3 .modif,#list3 .supr').attr('disabled',true);
                $('#list3 .modif,#list3 .supr').prop('checked', false)
            }
        });
        $('#list4 .rech').on('change',function(){
            if($('#list4 .rech').is(':checked')){
                $('#list4 .modif,#list4 .supr').removeAttr('disabled');
            }else{
                $('#list4 .modif,#list4 .supr').attr('disabled',true);
                $('#list4 .modif,#list4 .supr').prop('checked', false)
            }
        });
        $('#list5 .rech').on('change',function(){
            if($('#list5 .rech').is(':checked')){
                $('#list5 .modif,#list5 .supr').removeAttr('disabled');
            }else{
                $('#list5 .modif,#list5 .supr').attr('disabled',true);
                $('#list5 .modif,#list5 .supr').prop('checked', false)
            }
        });
        $('#list6 .rech').on('change',function(){
            if($('#list6 .rech').is(':checked')){
                $('#list6 .modif,#list6 .supr').removeAttr('disabled');
            }else{
                $('#list6 .modif,#list6 .supr').attr('disabled',true);
                $('#list6 .modif,#list6 .supr').prop('checked', false)
            }
        });
    </script>
    {/if}
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