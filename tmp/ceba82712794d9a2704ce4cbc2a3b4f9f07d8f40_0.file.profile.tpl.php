<?php
/* Smarty version 3.1.39, created on 2021-04-02 20:46:24
  from 'C:\Users\Pedagogie\Desktop\gg\CESI-Internship-Finder\layout\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60676680564172_53754760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceba82712794d9a2704ce4cbc2a3b4f9f07d8f40' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\layout\\profile.tpl',
      1 => 1617389180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60676680564172_53754760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Pedagogie\\Desktop\\gg\\CESI-Internship-Finder\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/star_profile.css">
    <link rel="stylesheet" href="../CSS/profile.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div id="card">
        <div class="row">
            <div class="col-md-4 col-sm-12 profile" id="profile">
                <img id="thelogo" src="../image/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" alt="<?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['info']->value['raison_sociale'], 'UTF-8')));?>
" />
            </div>
            <div class="col-md-8 col-sm-12 plus" id="plus">
                <h1><?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['info']->value['raison_sociale'], 'UTF-8')));?>
</h1>
                <ul>
                    <li>Secteur d'activité : <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['info']->value['Secteur_activite'], 'UTF-8')));?>
</li>
                    <li>Localité : <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['info']->value['localite'], 'UTF-8')));?>
</li>
                    <li>Email : <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between align-items-center ">
            <div class="col-md-6 d-inline-flex align-items-center">
                <img id="user" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/225748/profile.jpg" alt="">
                <h5><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['nom'], 'UTF-8');?>
 <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['prenom'], 'UTF-8')));?>
<span class="role"><?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['_SESSION']->value['current_user']['type'], 'UTF-8')));?>
</span></h5>
            </div>
            <div id="ratingsystem" class="col-md-6">
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
                </div>
            </div>
        </div>
        <div id="area">
            <textarea cols="45" placeholder="Laisser un commentaire..."></textarea>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'comm');
$_smarty_tpl->tpl_vars['comm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comm']->value) {
$_smarty_tpl->tpl_vars['comm']->do_else = false;
?>   
                <div class="comment mt-2"> <img src="../image/<?php echo $_smarty_tpl->tpl_vars['comm']->value['type'];?>
/<?php echo $_smarty_tpl->tpl_vars['comm']->value['id_utilisateur'];?>
" alt="" class="rounded-circle" width="40" height="40">
                    <h6><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['comm']->value['nom'], 'UTF-8');?>
 <?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['comm']->value['prenom'], 'UTF-8')));?>
</h6> <span class="role"><?php echo smarty_modifier_capitalize((mb_strtolower($_smarty_tpl->tpl_vars['comm']->value['type'], 'UTF-8')));?>
</span> <span class="d-inline-block">- <?php echo $_smarty_tpl->tpl_vars['comm']->value['date'];?>
</span>
                    <label>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                            <?php if ($_smarty_tpl->tpl_vars['comm']->value['note'] >= $_smarty_tpl->tpl_vars['i']->value) {?>
                                <i class="fas fa-star" style="font-color:yellow;"></i>
                            <?php } else { ?>
                                <i class="fas fa-star" style="font-color:grey;"></i>
                            <?php }?>                  
                        <?php }
}
?>
                    </label>
                    <p><?php echo $_smarty_tpl->tpl_vars['comm']->value['commentaire'];?>
</p>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
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
