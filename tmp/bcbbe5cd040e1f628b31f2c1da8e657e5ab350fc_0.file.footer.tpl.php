<?php
/* Smarty version 3.1.39, created on 2021-03-28 13:18:39
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060660fa54ea4_46951519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcbbe5cd040e1f628b31f2c1da8e657e5ab350fc' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\footer.tpl',
      1 => 1616930312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060660fa54ea4_46951519 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="CSS/footer.css">

<footer style="width:100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-pad">
                        <div id="about">
                            <h3>A propos de nous</h3>
                        </div>
                        <p class="text-left">CESI Internship Finder, est un site de stage dédié aux
                            étudiants des campus CESI pour leur permettre, grace aux differentes offres mise à
                            leurs disposition pour trouver le meilleur stage
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-pad">
                        <h3>Navigation</h3>
                        <ul class="navigation">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Mention légales</a></li>
                            <li><a href="#">Telécharger</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-pad">
                        <h3 id="network">Suivez nous</h3>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="iconfb" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="iconlink" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="iconinst" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="icontwi" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-pad">
                        <h3>Signalez un problème</h3>
                        <form id="prblm">
                            <input type="email" id="femail" placeholder="Email">
                            <textarea name="description" id="ds" cols="5" rows="5"
                                placeholder="Decrivez-nous le problème"></textarea>
                            <button>Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 copy">
                    <p class="text-center"> &copy; Copyright 2021 CESI Internship Finder. Tous droits reservés.</p>
                </div>
            </div>
        </div>
    </footer><?php }
}
