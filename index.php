<?php
session_start();
require_once('PHP/Route.php');
require_once('php/smarty-3.1.39/libs/Smarty.class.php');


Route::add('/',function(){
    if(isset($_SESSION['cesiifemail'])){
        header('Location: home');
    }else{
        $smarty = new Smarty();
        $smarty->template_dir = 'php/vue';
        $smarty->compile_dir = 'php/tmp';
        $smarty->display('acceuil.tpl');

    }
});
Route::add('/login',function(){
    $smarty = new Smarty();
    $smarty->template_dir = 'php/vue';
    $smarty->compile_dir = 'php/tmp';
    if(isset($_SESSION[cesiifemail])){
        header('Location: /home');
    }else{
        $smarty->display('login.tpl');
    }
});
Route::add('/home',function(){
    echo 'home';
});

Route::run('/');



?>