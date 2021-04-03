<?php
/* Smarty version 3.1.39, created on 2021-04-03 12:13:00
  from 'C:\Users\pc\Desktop\projet web\CESI-Internship-Finder\layout\notfound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60683fac917810_70350622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39e27003675442c1bae7bacaab1bc93bfa3b09f1' => 
    array (
      0 => 'C:\\Users\\pc\\Desktop\\projet web\\CESI-Internship-Finder\\layout\\notfound.tpl',
      1 => 1617444740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60683fac917810_70350622 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 - Not Found</title>

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
				<h1>404</h1>
			</div>
			<h2>Oops! This Page Could Not Be Found</h2>
			<p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarily
				unavailable</p>
			<a href="/">Go To Homepage</a>
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
