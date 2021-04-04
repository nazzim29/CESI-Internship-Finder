<?php
/* Smarty version 3.1.39, created on 2021-04-04 02:56:11
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\indexuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60690eabe26087_40249418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a85fbffc1754c8094d560eb6442e4f9c5c2fab16' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\indexuser.tpl',
      1 => 1617497769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60690eabe26087_40249418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Affichage</title>
    <!--fontawesomeCDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font -->
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="\CSS/rechercheentr.css">
</head>

<body style="overflow-x: hidden;">
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center">Recherche <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8')));?>
</h1>
        <div class="input-group">
            <input type="search" id="sr" class="form-control rounded" placeholder="Rechercher une entreprise"
                aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="input-group-text border-0" id="search-addon">
                <i class="fa fa-search" id="search" onclick="chercher()"></i>
            </button>
            <!--bouton refresh-->
            <button type="button" class="input-group-text border-0" id="refresh" onclick="getrows('<?php echo mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8');?>
')">
                <i class="fas fa-sync rotating"></i>
            </button>
        </div>
        <div class="row filter">
            <div class="col localite">
                <label>Promotion</label>
                <ul id="promo">

                </ul>
            </div>
            <div class="col competences">
                <label>centre</label>
                <ul id="centre">
                
                </ul>
            </div>
        </div>
        <section id="entrecard">
            <div class="row" id="jsresult">

            </div>
        </section>    
    </div>
    <!--Pagination-->
    <div id="page" class="col-lg-12 p-4">
        <ul class="pagination justify-content-center">
            <li class="prev" onclick="previouspage()" id="prvbtn"><a href="#"><i class="fas fa-chevron-left"></i>
                    Précedent</a></li>
            <div style="display: flex;flex-direction: row;" id="pg">
            </div>
            <li class="next" onclick="nextpage()" id='nxtbtn'><a href="#">Suivant <i
                        class="fas fa-chevron-right"></i></a></li>

        </ul>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--SCRIPT-->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="\js/userrech.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            getrows('<?php echo mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8');?>
');
        });
    <?php echo '</script'; ?>
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
    <?php echo '<script'; ?>
>
        function show() {
            html = ""
            for(var i = (current_page-1)*8;i<current_page*8;i++){
                var element = filtred_rows[i];
                var card = "<div class=\"col-lg-3 col-md-6\"> <div class=\"card\"><div class=\"card-body\"><div class=\"col-lg-12 image\"><img src=\"\Image/"+type+"/";
                card+= element.Id_utilisateur +".png\" alt=\"logo\" class=\"img-fluid rounded-circle w-50\"></div><ul class=\"info\"><li><a href=\""+type+"/"+element.Id_utilisateur+"\"> ";
                card+= element.Nom.toUpperCase() + " " + capitalize(element.Prenom)+"</a></li><li>Promotion: ";
                card+= element.Promotion +"</li><li>Centre: ";
                card+= element.Centre +"</li><li>Crée par : "+ element.Createur +"</li><li><a href=\"mailto:";
                card+= element.Email +"\">Email</a></li></ul>";


                <?php if (($_smarty_tpl->tpl_vars['type']->value == "ETUDIANT"&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx24',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))))) {?>
                    
                    card+="<div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\"><a href=\""+type+"/update/"+ element.Id_utilisateur +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a></div>";

                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "PILOTE"&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx19',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission'])))) {?>
                    
                    card+="<div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\"><a href=\""+type+"/update/"+ element.Id_utilisateur +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a></div>";

                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'DELEGUE'&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx24',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission'])))) {?>
                    
                    card+="<div class=\"d-flex flex-row justify-content-center\"><div class=\"p-1\"><a href=\""+type+"/update/"+ element.Id_utilisateur +"\" class=\"btnms\"><i class=\"far fa-edit\"></i></a></div>";
                <?php }?>


                <?php if (($_smarty_tpl->tpl_vars['type']->value == "ETUDIANT"&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx25',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission']))))) {?>
                    
                    card+="<div class=\"p-1\"><a href=\"\" class=\"btnms\" onclick=\"supr("+element.Id_utilisateur+")\"><i class=\"far fa-trash-alt\"></i></a></div></div></div></div></div>";

                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "PILOTE"&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx16',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission'])))) {?>
                    
                    card+="<div class=\"p-1\"><a href=\"\" class=\"btnms\" onclick=\"supr("+element.Id_utilisateur+")\"><i class=\"far fa-trash-alt\"></i></a></div></div></div></div></div>";

                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'DELEGUE'&($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "ADMIN" || $_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "PILOTE" || ($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'] == "DELEGUE"&array_search('sfx20',$_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['permission'])))) {?>
                    
                    card+="<div class=\"p-1\"><a href=\"\" class=\"btnms\" onclick=\"supr("+element.Id_utilisateur+")\"><i class=\"far fa-trash-alt\"></i></a></div></div></div></div></div>";
                    

                <?php }?>

                html+=card;
                document.getElementById('jsresult').innerHTML = html;
            }
        }
    <?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
