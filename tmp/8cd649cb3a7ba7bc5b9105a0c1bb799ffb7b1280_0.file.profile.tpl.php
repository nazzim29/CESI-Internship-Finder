<?php
/* Smarty version 3.1.39, created on 2021-04-04 04:45:23
  from 'C:\Users\Dell\Documents\CESI-Internship-Finder\layout\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6069284305e850_46108533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd649cb3a7ba7bc5b9105a0c1bb799ffb7b1280' => 
    array (
      0 => 'C:\\Users\\Dell\\Documents\\CESI-Internship-Finder\\layout\\profile.tpl',
      1 => 1617488784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6069284305e850_46108533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Dell\\Documents\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\Users\\Dell\\Documents\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div id="card">
        <div class="row">
            <div class="col-lg-4 col-md-12 profile" id="profile">
                <img id="thelogo" src="\image/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
.png" alt="User" />
            </div>
            <div class="col-lg-8 col-md-12 plus">
                <div class="row" style="align-items:center;">
                    <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value['Nom'], 'UTF-8');?>
 <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Prenom'], 'UTF-8')));?>
</h1>

                    <span class="role" style="height: fit-content;margin-left: 10px;"><?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8')));?>
</span>
                </div>
                
                <ul>
                    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['Createur']))) {?>
                    <li>Crée par <?php echo $_smarty_tpl->tpl_vars['user']->value['Createur'];?>
 </li>
                    <?php }?>
                    <li><a style="height:fit-content;width:50%" class="btn" href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value["Email"];?>
">Envoyer un email</a></li>
                </ul>
            </div>
        </div>

        <div class="truc">
            <ul id="truc">
                <li><i class="far fa-bookmark"></i><span> A2</span></li>
                <li><i class="far fa-calendar-alt"></i> Ajouté le <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['Date_creation'],"%d %b %Y à %H:%M");?>
</span> </li>
                <li class="date"><i class="fas fa-eye"></i><span> <?php echo $_smarty_tpl->tpl_vars['user']->value['Nb_visite'];?>
</span> vues </li>
            </ul>


        </div>
        <div class="comment">
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['Type'] == "PILOTE") {?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx15',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                        <div class="col-lg-4">
                            <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/update/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
" class="btn">Modifier</a>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx16',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                    <div class="col-lg-4">
                        <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
"class="btn">Supprimer</a>
                    </div>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['Type'] == "DELEGUE") {?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx19',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                        <div class="col-lg-4">
                            <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/update/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
" class="btn">Modifier</a>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx20',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                    <div class="col-lg-4">
                        <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
"class="btn">Supprimer</a>
                    </div>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['Type'] == "DELEGUE") {?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx24',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                        <div class="col-lg-4">
                            <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/update/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
" class="btn">Modifier</a>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == 'DELEGUE'&array_search('sfx25',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))) {?>
                    <div class="col-lg-4">
                        <a href="\<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user']->value['Type'], 'UTF-8');?>
/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_utilisateur'];?>
"class="btn">Supprimer</a>
                    </div>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
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

</body><?php }
}
