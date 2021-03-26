<?php
session_start();
require_once('libs\Route.php');
require_once('libs\smarty-3.1.39\libs\Smarty.class.php');
include_once('controllers\LoginController.php');
include_once('controllers\EntrepriseController.php');
Route::add('/',function(){
    if(isset($_SESSION['current_user'])){
        //redirection vers la dashboard si connéctée
        header('Location: home');
    }else{
        //affichage de l'acceuil si toujours pas connectée
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        $smarty->display('acceuil.tpl');

    }
});
Route::add('/login',function(){
    //affichage de la page de connexion
    LoginController::get();

    
},'GET');
Route::add('/login',function(){
    LoginController::post(array(
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'remember' => $_POST['remember']
    ));
},'POST');
Route::add('/logout',function(){
    LoginController::logout();
});
Route::add('/entreprise/new',function(){
    EntrepriseController::get();

},'GET');
Route::add('/home',function(){
    //affichage de la dashboard
    // if(isset($_SESSION['email'])){
        
    // }
    $smarty = new Smarty();
    $smarty->template_dir = 'layout';
    $smarty->compile_dir = 'tmp';
    $smarty->assign('_SESSION',$_SESSION);
    $smarty->display('home.tpl');

});

Route::run('/');



?>