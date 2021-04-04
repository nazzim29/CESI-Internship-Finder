<?php
/* Smarty version 3.1.39, created on 2021-04-04 03:30:17
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\formoffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606916a9e9f2d8_10962958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1216368fbfc14955e4fd3e285543ee22160742b' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\formoffre.tpl',
      1 => 1617494188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_606916a9e9f2d8_10962958 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une offre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
        <form id="create" method="POST">
            <h1 id="titre">Creation d'une offre</h1>
            <div class="row">
                <div class="form-group">
                    <label for="nom">Compétences</label><br>
                    <input type="text" id="nom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="adr">Nom de l'entreprise</label><br>
                    <input type="text" id="adr" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="secteur">Adresse</label><br>
                    <input type="text" id="secteur" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Promotions concernées</label>
                    <ul class="checkbox">
                        <li>
                            <input type="checkbox" id="pone" name="Promotions[]" value="A1">
                            <label for="pone">A1</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ptwo" name="Promotions[]" value="A2">
                            <label for="ptwo">A2</label>
                        </li>
                        <li>
                            <input type="checkbox" id="pthree" name="Promotions[]" value="A3">
                            <label for="pthree">A3</label>
                        </li>
                        <li>
                            <input type="checkbox" id="pfour" name="Promotions[]" value="A4">
                            <label for="pfour">A4</label>
                        </li>
                        <li>
                            <input type="checkbox" id="pfive" name="Promotions[]" value="A5">
                            <label for="pfive">A5</label>
                        </li>
                    </ul>
                </div>

                <div class="form-group">
                    <label for="duree">Durée du stage</label><br>
                    <input type="number" id="duree" class="form-control" placeholder="En Semaines..." required>
                </div>

                <div class="form-group">
                    <label for="br">Base de rémunération</label><br>
                    <input type="text" id="br" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nbr">Nombre de places offeretes aux étudiants</label><br>
                    <input type="number" id="nbr" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-sample btn-rounded"><i class="fas fa-plus"></i> Créer
                        l'offre
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!--footer-->
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
