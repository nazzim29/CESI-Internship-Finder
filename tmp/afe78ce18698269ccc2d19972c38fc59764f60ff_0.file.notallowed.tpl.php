<?php
/* Smarty version 3.1.39, created on 2021-04-04 02:41:15
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\notallowed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60690b2b6187b1_53098030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe78ce18698269ccc2d19972c38fc59764f60ff' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\notallowed.tpl',
      1 => 1617458261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60690b2b6187b1_53098030 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>401 - Not Authorized</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="\css/error.css" />
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>401</h1>
            </div>
            <h2>NOT AUTHORIZED</h2>
            <p>This server could not verify that you are authorized to access the document requested</p>
            <a href="#">Go To Homepage</a>
        </div>
    </div>
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
