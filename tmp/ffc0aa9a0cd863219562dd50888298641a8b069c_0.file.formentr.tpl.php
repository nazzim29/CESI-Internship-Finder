<?php
/* Smarty version 3.1.39, created on 2021-03-28 13:23:22
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\formentr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060672a7d2816_92622769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc0aa9a0cd863219562dd50888298641a8b069c' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\formentr.tpl',
      1 => 1616930596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_6060672a7d2816_92622769 (Smarty_Internal_Template $_smarty_tpl) {
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

    <link rel="stylesheet" href="../CSS/star_rating.css">
    <link rel="stylesheet" href="../CSS/formstyle.css">
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <form id="create">
            <h1 id="titre">Creation d'Entreprise</h1>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="secteur">Secteur d'activité</label><br>
                    <input type="text" id="secteur" class="form-control" required>
                </div>


                <div class="form-group">
                    <label for="adr">Adresse</label><br>
                    <input type="text" id="adr" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nbr">Nombre de stagiaires CESI déjà acceptés</label><br>
                    <input type="number" id="nbr" class="form-control" required>
                </div>

                <label for="nbr">Confiance du pilote</label><br>
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
                    <div id="ressenti"></div>
                    <textarea cols="45" placeholder="Laisser un commentaire..."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded"><i class="fas fa-plus"></i> Créer
                        Entreprise
                    </button>
                </div>
            </div>
        </form>
    </div>
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
<!--footer-->

</html> <?php }
}
