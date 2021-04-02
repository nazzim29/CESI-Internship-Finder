<?php
/* Smarty version 3.1.39, created on 2021-04-02 18:52:11
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\formuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60674bbb755204_14691032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c6e8787086756faf44d32d874cbbc2b4294f80' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\formuser.tpl',
      1 => 1617382330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60674bbb755204_14691032 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création user</title>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/formstyle.css">
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <form id="create">
            <h1 id="titre">Créer un <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</h1>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="firstname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label><br>
                    <input type="text" id="prenom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nomuser">Email</label><br>
                    <input type="text" id="nomuser" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="pass">Mot de passe</label><br>
                    <input type="password" id="pass" class="form-control" name="motdepasse" required>
                </div>

                <div class="form-group">
                    <label for="adr">Centre</label><br>
                    <input type="text" id="adr" class="form-control" required>
                </div>
                <div class="form-group" id="promostudent">
                    <label for="promo">Promotion</label><br>
                    <SELECT id="promo" class="form-select form-control" name="nom" size="1">
                        <OPTION class="op">Choisir une promotion...
                        <OPTION class="op">A1
                        <OPTION class="op">A2
                        <OPTION class="op">A3
                        <OPTION class="op">A4
                        <OPTION class="op">A5
                    </SELECT>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Delegué' && ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN")) {?>
                <label>Droits attribués</label>
                <!--Permission délégués-->
                <div id="permission" class="row">
                    <div class="col">
                        <label id="gentr">Gestion Entreprise</label>
                        <div id="list1">
                            <ul class="items">
                                <li><input type="checkbox" id="rech" />Rechercher </li>
                                <li><input type="checkbox" />Créer</li>
                                <li><input type="checkbox" id="modif" disabled/>Modifier</li>
                                <li><input type="checkbox" />Evaluer</li>
                                <li><input type="checkbox" id="supr" disabled/>Supprimer</li>
                                <li><input type="checkbox" />Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="goffr">Gestion Offres</label>
                        <div id="list2">
                            <ul class="items">
                                <li><input type="checkbox" id="rech" />Rechercher </li>
                                <li><input type="checkbox" />Créer</li>
                                <li><input type="checkbox" id="modif" disabled/>Modifier</li>
                                <li><input type="checkbox" />Evaluer</li>
                                <li><input type="checkbox" id="supr" disabled/>Supprimer</li>
                                <li><input type="checkbox" />Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="getu">Gestion Etudiants</label>
                        <div id="list3">
                            <ul class="items">
                                <li><input type="checkbox" id="rech" />Rechercher </li>
                                <li><input type="checkbox" />Créer</li>
                                <li><input type="checkbox" id="modif" disabled/>Modifier</li>
                                <li><input type="checkbox" />Evaluer</li>
                                <li><input type="checkbox" id="supr" disabled/>Supprimer</li>
                                <li><input type="checkbox" />Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gdel">Gestion Délegués</label>
                        <div id="list4">
                            <ul class="items">
                                <li><input type="checkbox" id="rech" />Rechercher </li>
                                <li><input type="checkbox" />Créer</li>
                                <li><input type="checkbox" id="modif" disabled/>Modifier</li>
                                <li><input type="checkbox" />Evaluer</li>
                                <li><input type="checkbox" id="supr" disabled/>Supprimer</li>
                                <li><input type="checkbox" />Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gcand">Gestion Candidatures</label>
                        <div id="list5">
                            <ul class="items">
                                <li><input type="checkbox" />Avancement step 3</li>
                                <li><input type="checkbox" />Avancement step 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded"><i class="fas fa-plus"></i> Créer un
                        utilisateur
                    </button>
                </div>
            </div>
        </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "Delegué" && ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN")) {?>
    <?php echo '<script'; ?>
>
        $('#gentr').on('click',function(){
            $('#list1 input').prop('checked', false);
            $('#list1 #modif,#list1 #supr').attr('disabled',true);
            $('#list1').toggle(200);
        });
        $('#goffr').on('click',function(){
            $('#list2 #modif,#list2 #supr').attr('disabled',true);
            $('#list2 input').prop('checked', false);
            $('#list2').toggle(200);
        });
        $('#getu').on('click',function(){
            $('#list3 #modif,#list3 #supr').attr('disabled',true);
            $('#list3 input').prop('checked', false);
            $('#list3').toggle(200);
        });
        $('#gdel').on('click',function(){
            $('#list4 #modif,#list4 #supr').attr('disabled',true);
            $('#list4 input').prop('checked', false);
            $('#list4').toggle(200);
        });
        $('#gcand').on('click',function(){
            $('#list5 #modif,#list5 #supr').attr('disabled',true);
            $('#list5 input').prop('checked', false);
            $('#list5').toggle(200);
        });
        $('#list1 #rech').on('change',function(){
            if($('#list1 #rech').is(':checked')){
                $('#list1 #modif,#list1 #supr').removeAttr('disabled');
            }else{
                $('#list1 #modif,#list1 #supr').attr('disabled',true);
                $('#list1 #modif,#list1 #supr').prop('checked', false)
            }
        });
        $('#list2 #rech').on('change',function(){
            if($('#list2 #rech').is(':checked')){
                $('#list2 #modif,#list2 #supr').removeAttr('disabled');
            }else{
                $('#list2 #modif,#list2 #supr').attr('disabled',true);
                $('#list2 #modif,#list2 #supr').prop('checked', false)
            }
        });
        $('#list3 #rech').on('change',function(){
            if($('#list3 #rech').is(':checked')){
                $('#list3 #modif,#list3 #supr').removeAttr('disabled');
            }else{
                $('#list3 #modif,#list3 #supr').attr('disabled',true);
                $('#list3 #modif,#list3 #supr').prop('checked', false)
            }
        });
        $('#list4 #rech').on('change',function(){
            if($('#list4 #rech').is(':checked')){
                $('#list4 #modif,#list4 #supr').removeAttr('disabled');
            }else{
                $('#list4 #modif,#list4 #supr').attr('disabled',true);
                $('#list4 #modif,#list4 #supr').prop('checked', false)
            }
        });
        $('#list5 #rech').on('change',function(){
            if($('#list5 #rech').is(':checked')){
                $('#list5 #modif,#list5 #supr').removeAttr('disabled');
            }else{
                $('#list5 #modif,#list5 #supr').attr('disabled',true);
                $('#list5 #modif,#list5 #supr').prop('checked', false)
            }
        });
    <?php echo '</script'; ?>
>
    <?php }?>
</body>

</html><?php }
}