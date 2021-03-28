<?php
/* Smarty version 3.1.39, created on 2021-03-28 12:55:25
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\indexentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060609de6fa47_40689392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef28bbbd336c58242c21dd872e3703599c687a3' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\indexentreprise.tpl',
      1 => 1616928924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6060609de6fa47_40689392 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="CSS\home.css" rel="stylesheet">
    <title>Home</title>
    <title>Affichage</title>
    <!--fontawesomeCDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font -->

    <link rel="stylesheet" href="CSS/rechercheentr.css">
</head>

<body onload ="getall()" style ="overflow-x: hidden;">
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center">Affichage Entreprise</h1>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Rechercher une entreprise" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="input-group-text border-0" id="search-addon">
                <i class="fa fa-search" id="search" onclick="chercher()"></i>
            </button>
        </div>
        <div class="filterby">
            <ul class="filter">
                <li>
                    <input type="checkbox" id="checkboxOne" value="Afficher tous">
                    <label for="checkboxOne">Afficher tous</label>
                </li>
                <li>
                    <input type="checkbox" id="checkboxTwo" value="Raison sociale" checked>
                    <label for="checkboxTwo">Raison sociale</label>
                </li>
                <li>
                    <input type="checkbox" id="checkboxThree" value="Secteur d'activité" checked>
                    <label for="checkboxThree">Secteur d'activité</label>
                </li>
                <li>
                    <input type="checkbox" id="checkboxFour" value="Compétences">
                    <label for="checkboxFour">Compétences</label>
                </li>
                <li>
                    <input type="checkbox" id="checkboxFive" value="Localité">
                    <label for="checkboxFive">Localité</label>
                </li>
            </ul>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--SCRIPT-->
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
 src="js\entrepriserech.js"><?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
