<?php
/* Smarty version 3.1.39, created on 2021-03-29 22:01:57
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\formentr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60623235ae3722_64460110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc0aa9a0cd863219562dd50888298641a8b069c' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\formentr.tpl',
      1 => 1617048111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_60623235ae3722_64460110 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Entreprise</title>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../CSS/star_rating.css">
    <link rel="stylesheet" href="../../CSS/formstyle.css">
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <form enctype="multipart/form-data" id="create" method="POST">
            <h1 id="titre"><?php if (!(isset($_smarty_tpl->tpl_vars['en']->value))) {?>Creation<?php } else { ?>Modification<?php }?> d'Entreprise</h1>
            <?php if ((isset($_smarty_tpl->tpl_vars['erreur']->value))) {?>
            <label><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</label>
            <?php }?>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Raison Sociale</label><br>
                    <input type="text" id="raison_sociale" name="raison_sociale" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['en']->value->Raison_social))) {?> value = "<?php echo $_smarty_tpl->tpl_vars['en']->value->Raison_social;?>
"<?php }?> required>
                </div>

                <div class="form-group">
                    <label for="secteur">Secteur d'activité</label><br>
                    <input type="text" id="secteur" name="secteur_dactivite" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['en']->value->Secteur_activite))) {?> value = "<?php echo $_smarty_tpl->tpl_vars['en']->value->Secteur_activite;?>
"<?php }?> required>
                </div>


                <div class="form-group">
                    <label for="adr">Localité</label><br>
                    <input type="text" id="adr" name="localite" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['en']->value->Localite))) {?> value = "<?php echo $_smarty_tpl->tpl_vars['en']->value->Localite;?>
"<?php }?> required>
                </div>
                
                <div class="form-group">
                    <label for="email">Adresse Email</label><br>
                    <input type="email" id="email" name="email" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['en']->value->Email))) {?> value = "<?php echo $_smarty_tpl->tpl_vars['en']->value->Email;?>
"<?php }?> required>
                </div>

                <div class="form-group">
                    <label for="nbr">Nombre de stagiaires CESI déjà acceptés</label><br>
                    <input type="number" id="nbr" class="form-control" value="nb_stagiaires" <?php if ((isset($_smarty_tpl->tpl_vars['en']->value->nb_stagiaires))) {?> value = "<?php echo $_smarty_tpl->tpl_vars['en']->value->nb_stagiaires;?>
"<?php }?> required>
                </div>
                <div class="form-group">
                    <label for="file">Uploader un logo</label><br>
                    <input type="file" id="file" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded">
                        <i class="fas fa-plus"></i> 
                        <?php if (!(isset($_smarty_tpl->tpl_vars['en']->value))) {?>Créer Entreprise<?php } else { ?>Enregistrer<?php }?>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!--footer-->
    
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
    <?php echo '<script'; ?>
 src="../JS/star_rating.js"><?php echo '</script'; ?>
>
</body>


</html> <?php }
}
