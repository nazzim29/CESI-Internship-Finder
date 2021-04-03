<?php
/* Smarty version 3.1.39, created on 2021-04-03 13:11:23
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60684d5b5ce9b8_35372421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2500cef6e48dc2506bed3b72af206b92987c609' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\home.tpl',
      1 => 1617444815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60684d5b5ce9b8_35372421 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fontawesomeCDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!--bootstrapCDN-->
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!--CSS link-->
    <link href="CSS/home.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--Home admin-->
    <div id="body">
        <section class="container">
            <h3>Les dernières Entreprises ajoutées </h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo1.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale: Oks web</li>
                                <li>Secteur d'activité: Informatique</li>
                                <li>Localité: Alger</li>
                                <li>Email: contact@okswebcom</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo2.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo3.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn">Ajouter nouveau</button>
                </div>
                <div class="col-lg-6">
                    <button class="btn">Afficher tous</button>
                </div>
            </div>
        </section>
        <section class="container">
            <h3>Les derniers Pilotes ajoutées </h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo1.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale: Oks web</li>
                                <li>Secteur d'activité: Informatique</li>
                                <li>Localité: Alger</li>
                                <li>Email: contact@okswebcom</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo2.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo3.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn">Ajouter nouveau</button>
                </div>
                <div class="col-lg-6">
                    <button class="btn">Afficher tous</button>
                </div>
            </div>
        </section>
        <section class="container">
            <h3>Les dernières Offres ajoutées </h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo1.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale: Oks web</li>
                                <li>Secteur d'activité: Informatique</li>
                                <li>Localité: Alger</li>
                                <li>Email: contact@okswebcom</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="fas fa-align-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo2.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="fas fa-align-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo3.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1 tool">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                    <span class="tooltiptext">Modifier</span>
                                </div>
                                <div class="p-1 tool">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                    <span class="tooltiptext">Supprimer</span>
                                </div>
                                <div class="p-1 tool">
                                    <a href="#" class="btnms"><i class="far fa-heart"></i></a>
                                    <span class="tooltiptext">wishList</span>

                                </div>
                                <div class="p-1 tool">
                                    <a href="#" class="btnms"><i class="fas fa-align-left"></i></a>
                                    <span class="tooltiptext">Postuler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn">Ajouter nouveau</button>
                </div>
                <div class="col-lg-6">
                    <button class="btn">Afficher tous</button>
                </div>
            </div>
        </section>
        <section class="container">
            <h3>Les derniers Etudiants ajoutées </h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo1.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale: Oks web</li>
                                <li>Secteur d'activité: Informatique</li>
                                <li>Localité: Alger</li>
                                <li>Email: contact@okswebcom</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo2.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 image">
                                <img src="logo3.png" alt="logo" class="img-fluid rounded-circle w-50">
                            </div>
                            <ul class="info">
                                <li>Raison sociale:</li>
                                <li>Secteur d'activité: </li>
                                <li>Localité:</li>
                                <li>Email:</li>
                            </ul>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="p-1">
                                    <a href="#" class="btnms"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn">Ajouter nouveau</button>
                </div>
                <div class="col-lg-6">
                    <button class="btn">Afficher tous</button>
                </div>
            </div>
        </section>
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
</body>

</html><?php }
}
