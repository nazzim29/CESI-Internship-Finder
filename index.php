<?php
session_start();
require_once('PHP/Route.php');
require_once('php/smarty-3.1.39/libs/Smarty.class.php');
include_once('php\controllers\LoginController.php');

Route::add('/',function(){
    if(isset($_SESSION['current_user'])){
        //redirection vers la dashboard si connéctée
        header('Location: home');
    }else{
        //affichage de l'acceuil si toujours pas connectée
        $smarty = new Smarty();
        $smarty->template_dir = 'php/vue';
        $smarty->compile_dir = 'php/tmp';
        $smarty->display('acceuil.tpl');

    }
});
Route::add('/login',function(){
    $loginctrl = new LoginController();
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //affichage de la page de connexion
        $loginctrl->get();
        
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //autehntification
        $loginctrl->post(array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ));

    }
    
});
Route::add('/home',function(){
    //affichage de la dashboard
    // if(isset($_SESSION['email'])){
        
    // }
    $_SESSION['current_user'] = [
        'role' => 'ADMIN'
    ];
    $smarty = new Smarty();
    $smarty->template_dir = 'php/vue';
    $smarty->compile_dir = 'php/tmp';
    $smarty->assign('_SESSION',$_SESSION);
    $smarty->display('home.tpl');

});

Route::run('/');



?>