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
Route::add('/logout',function(){
    LoginController::logout();
});
Route::add('/etudiant/([0-9]*)',function($var1){
    //afficher un etudiant
});
Route::add('/pilote/([0-9]*)',function($var1){
    //afficher un pilote
});
Route::add('/delegue/([0-9]*)',function($var1){
    //afficher un delegue
});
Route::add('/entreprise/new',function(){
    EntrepriseController::indexnew();
},'GET');
Route::add('/entreprise',function(){
    EntrepriseController::index();
},'GET');
Route::add('/login',function(){
    LoginController::post(array(
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'remember' => $_POST['remember']
    ));
},'POST');
Route::add('/entreprise/new',function(){
    EntrepriseController::post(array(
        'raison_sociale' => $_POST['raison_sociale'],
        'localite' => $_POST['localite'],
        'secteur_dactivite' => $_POST['secteur_dactivite'],
        'email' => $_POST['email'],
        'rate' => $_POST['rate'],
        'commentaire' => $_POST['commentaire']
    ));
},'POST');

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