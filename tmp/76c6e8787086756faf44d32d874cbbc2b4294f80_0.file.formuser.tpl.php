<?php
/* Smarty version 3.1.39, created on 2021-04-04 02:40:31
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\formuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60690aff317914_26339945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c6e8787086756faf44d32d874cbbc2b4294f80' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\formuser.tpl',
      1 => 1617458261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60690aff317914_26339945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
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
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <form id="create" action="" enctype="multipart/form-data" method="POST">
            <h1 id="titre">Créer un <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8')));?>
</h1>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" class="form-control" required <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Nom'];?>
"<?php }?>>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label><br>
                    <input type="text" id="prenom" name="prenom" class="form-control" required <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Prenom'];?>
"<?php }?>>
                </div>

                <div class="form-group">
                    <label for="email">Email </label><br>
                    
                    <input type="email" id="email" name="email" class="form-control" required <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Email'];?>
"<?php }?>>
                </div>

                <div class="form-group">
                    <label for="pass">Mot de passe</label><br>
                    <input type="password" id="pass" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label for="centre">Centre</label><br>
                    <select id="centre" name="centre" class="form-select form-control" required>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['centres']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                            <OPTION class="op" value="<?php echo $_smarty_tpl->tpl_vars['c']->value["Id_centre"];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['c']->value['Id_centre'] == $_smarty_tpl->tpl_vars['user']->value['Id_centre']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value["Nom"];?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="promo">Promotion</label><br>
                    <SELECT id="promo" class="form-select form-control" name="promo" size="1" >
                        <OPTION class="op" <?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['user']->value["Promotion"] == "A1") {?>selected<?php }?>>A1
                        <OPTION class="op"<?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['user']->value["Promotion"] == "A2") {?>selected<?php }?>>A2
                        <OPTION class="op"<?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['user']->value["Promotion"] == "A3") {?>selected<?php }?>>A3
                        <OPTION class="op"<?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['user']->value["Promotion"] == "A4") {?>selected<?php }?>>A4
                        <OPTION class="op"<?php if ((isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['user']->value["Promotion"] == "A5") {?>selected<?php }?>>A5
                    </SELECT>
                </div>
                <div class="form-group">
                    <label for="photo">Photo de profile</label><br>
                    <input type="file" name="photo" class="form-control" >
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'DELEGUE' && ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN")) {?>
                <label>Droits attribués</label>
                <!--Permission délégués-->
                <div id="permission" class="row">
                    <div class="col">
                        <label id="gentr">Gestion Entreprise</label>
                        <div id="list1">
                            <ul class="items">
                                <li><input type="checkbox" class="rech" name="permission[]" value="2" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('2',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]" value="3" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('3',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Créer</li>
                                <li><input type="checkbox" class="modif" name="permission[]"  value="4" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('2',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }
if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('4',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?> checked<?php }?>/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" value="5" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('5',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Evaluer</li>
                                <li><input type="checkbox" class="supr" name="permission[]" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('2',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="6"<?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('6',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Supprimer</li>
                                <li><input type="checkbox" name="permission[]" value="7"<?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('7',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="goffr">Gestion Offres</label>
                        <div id="list2">
                            <ul class="items">
                                <li><input type="checkbox" class="rech" name="permission[]" value="8"<?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('8',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]" value="9"<?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('9',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('8',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="10" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('10',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Modifier</li>
                                <li><input type="checkbox"  name="permission[]" class="supr" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('8',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="11" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('11',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Supprimer</li>
                                <li><input type="checkbox"  name="permission[]" value="12" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('12',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="getu">Gestion Etudiants</label>
                        <div id="list3">
                            <ul class="items">
                                <li><input type="checkbox"  name="permission[]" class="rech" value="22" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('22',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Rechercher </li>
                                <li><input type="checkbox"  name="permission[]" value="23" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('23',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" value="24" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('22',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('24',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('22',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="25" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('25',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Supprimer</li>
                                <li><input type="checkbox" name="permission[]" value="26" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('26',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Consulter les stats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gdel">Gestion Délegués</label>
                        <div id="list4">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" class="rech" value="17" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('17',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]"  value="18" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('18',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('17',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="19" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('19',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('17',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="20" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('20',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Supprimer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gpil">Gestion Pilotes</label>
                        <div id="list5">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" class="rech" value="13" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('13',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Rechercher </li>
                                <li><input type="checkbox" name="permission[]"  value="14" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('14',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Créer</li>
                                <li><input type="checkbox"  name="permission[]" class="modif" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('13',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="15" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('15',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Modifier</li>
                                <li><input type="checkbox" name="permission[]" class="supr" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('13',$_smarty_tpl->tpl_vars['permission']->value) !== false) {
} else { ?>disabled<?php }?> value="16" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('16',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Supprimer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <label id="gcand">Gestion Candidatures</label>
                        <div id="list6">
                            <ul class="items">
                                <li><input type="checkbox" name="permission[]" value="32" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('32',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Avancement step 3</li>
                                <li><input type="checkbox" name="permission[]"value="33" <?php if ((isset($_smarty_tpl->tpl_vars['permission']->value)) && array_search('33',$_smarty_tpl->tpl_vars['permission']->value) !== false) {?>checked<?php }?>/>Avancement step 4</li>
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
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "DELEGUE" && ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN")) {?>
    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
    <?php }?>
  <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
