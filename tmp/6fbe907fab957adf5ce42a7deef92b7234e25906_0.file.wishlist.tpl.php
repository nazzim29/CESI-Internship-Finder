<?php
/* Smarty version 3.1.39, created on 2021-04-04 03:22:16
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606914c8efc796_45736745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbe907fab957adf5ce42a7deef92b7234e25906' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\wishlist.tpl',
      1 => 1617499326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_606914c8efc796_45736745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wish List</title>
    <link rel="stylesheet" href="\CSS\wishlist.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="forme">
        <h2 id="cr"> My wishlist </h2>
        <div id="love">
            <svg id="coeur" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" height="60">
                <path fill-rule="evenodd"
                    d="M6.736 4C4.657 4 2.5 5.88 2.5 8.514c0 3.107 2.324 5.96 4.861 8.12a29.66 29.66 0 004.566 3.175l.073.041.073-.04c.271-.153.661-.38 1.13-.674.94-.588 2.19-1.441 3.436-2.502 2.537-2.16 4.861-5.013 4.861-8.12C21.5 5.88 19.343 4 17.264 4c-2.106 0-3.801 1.389-4.553 3.643a.75.75 0 01-1.422 0C10.537 5.389 8.841 4 6.736 4zM12 20.703l.343.667a.75.75 0 01-.686 0l.343-.667zM1 8.513C1 5.053 3.829 2.5 6.736 2.5 9.03 2.5 10.881 3.726 12 5.605 13.12 3.726 14.97 2.5 17.264 2.5 20.17 2.5 23 5.052 23 8.514c0 3.818-2.801 7.06-5.389 9.262a31.146 31.146 0 01-5.233 3.576l-.025.013-.007.003-.002.001-.344-.666-.343.667-.003-.002-.007-.003-.025-.013A29.308 29.308 0 0110 20.408a31.147 31.147 0 01-3.611-2.632C3.8 15.573 1 12.332 1 8.514z">
                </path>
            </svg>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['souhait']->value != null) {?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Entreprise</th>
                        <th>Date de publication</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['souhait']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <tr>
                        <td class="mot" data-label="Offre"><?php echo $_smarty_tpl->tpl_vars['value']->value->Titre;?>
</td>
                        <td class="mot" data-label="Nom entreprise"><?php echo $_smarty_tpl->tpl_vars['value']->value->Entreprise;?>
</td>
                        <td class="mot" data-label="Date de publication"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value->Date_publication,"%d %b %Y");?>
</td>
                        <td class="del">
                            <input type="submit" class="btn" value="Postuler" onclick="location.href = '/offre/postuler/<?php echo $_smarty_tpl->tpl_vars['value']->value->Id_offre;?>
'">
                            <input type="submit" class="btn" value="Afficher plus" onclick="location.href = '/offre/<?php echo $_smarty_tpl->tpl_vars['value']->value->Id_offre;?>
'">
                            <a href="\wishlist/delete/<?php echo $_smarty_tpl->tpl_vars['value']->value->Id_offre;?>
"><i class="far fa-trash-alt param"></i></a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <h2>aucune offre n'est dans votre wishlist</h2>
        <?php }?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
