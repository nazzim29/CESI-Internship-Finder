<?php
session_start();
require_once('libs\Route.php');
require_once('view\View.php');
require_once('libs\smarty-3.1.39\libs\Smarty.class.php');
include_once('controllers\LoginController.php');
include_once('controllers\EntrepriseController.php');
include_once('controllers\OffreController.php');
include_once('controllers\UtilisateurController.php');


Route::add('/home',function(){
    //affichage de la dashboard
    if(isset($_SESSION['current_user'])){
       View::display('home');
    }else{
        header("Location: /login");
    }  
});
Route::add('/',function(){
    if(isset($_SESSION['current_user'])){
        //redirection vers la dashboard si connéctée
        header('Location: /home');
    }else{
        //affichage de l'acceuil si toujours pas connectée
        View::display('acceuil');
        
    }
});
/*  --------------- login et logout  ---------------*/
Route::add('/login',function(){
    //affichage de la page de connexion
    LoginController::get();
});
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
/*  --------------- gestion des offres  ---------------*/
Route::add('/offre/New',function(){
    OffreController::indexnew();
});
Route::add('/offre/New',function(){
    print_r($_POST);
    OffreController::post(array(
        "Competence"=>$_POST["competence"],
        "identreprise"=>$_POST["identreprise"],
        "promotion"=>$_POST["promotion"],
        "dureestage"=>$_POST["dureestage"],
        "basereemu"=>$_POST["basereemu"],
        "nbplaces"=>$_POST["nbplaces"]
    ));
},"POST");
Route::add('/offre/([0-9a-zA-Z" "]*)',function($var1){
    OffreController::afficher(array(
        'titre' => $var1
    ));
});
Route::add('/offre',function(){
    OffreController::index();
});
/* ---------------- Entreprise ---------------- */
Route::add('/entreprise/([0-9]*)',function($var1){
    echo "profile de l'entreprise".$var1;
});
Route::add('/entreprise/delete/([0-9]*)',function($var1){
    EntrepriseController::delete($var1);
});
Route::add('/entreprise/recherche',function(){
    EntrepriseController::recherche();
});
Route::add('/entreprise/new',function(){
    EntrepriseController::indexnew();
});
Route::add('/entreprise/update/([0-9]*)',function($var1){
    EntrepriseController::update(array(
        'id_entreprise' => $var1,
        'file' => $_FILES['logo'],
        'raison_sociale' => $_POST['raison_sociale'],
        'localite' => $_POST['localite'],
        'secteur_dactivite' => $_POST['secteur_dactivite'],
        'email' => $_POST['email'],
        'nb_etu' => $_POST['nbr']
    ));
},"POST");
Route::add('/entreprise/new',function(){
    EntrepriseController::post(array(
        'file' => $_FILES['logo'],
        'raison_sociale' => $_POST['raison_sociale'],
        'localite' => $_POST['localite'],
        'secteur_dactivite' => $_POST['secteur_dactivite'],
        'email' => $_POST['email'],
        'nb_etu' => $_POST['nbr']
    ));
},'POST');
Route::add('/entreprise/update/([0-9]*)',function($var1){
    EntrepriseController::updateindex($var1);
});
Route::add('/entreprise',function(){
    EntrepriseController::index();
});
/*  --------------- gestion utilisateur  ---------------*/
Route::add('/etudiant/new',function(){
    UtilisateurController::indexnew("ETUDIANT");
});
Route::add('/pilote/new',function(){
    UtilisateurController::indexnew("PILOTE");
});
Route::add('/delegue/new',function(){
    UtilisateurController::indexnew("DELEGUE");
});
Route::add('/etudiant',function(){
    UtilisateurController::rechercheindex("ETUDIANT");
});
Route::add('/pilote',function(){
    UtilisateurController::rechercheindex("PILOTE");
});
Route::add('/delegue',function(){
    UtilisateurController::rechercheindex("DELEGUE");
});
Route::add('/etudiant/recherche',function(){
    UtilisateurController::recherche("ETUDIANT");
});
Route::add('/pilote/recherche',function(){
    UtilisateurController::recherche("PILOTE");
});
Route::add('/delegue/recherche',function(){
    UtilisateurController::recherche("DELEGUE");
});
Route::add('/etudiant/new',function(){
    UtilisateurController::create(array(
        "type" => "ETUDIANT",
        "password" => $_POST['password'],
        "promotion" => $_POST['promo'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "file" => $_FILES['photo']
    ));
},"POST");
Route::add('/pilote/new',function(){
    UtilisateurController::create(array(
        "type" => "PILOTE",
        "password" => $_POST['password'],
        "promotion" => $_POST['promo'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "file" => $_FILES['photo']
    ));
},"POST");
Route::add('/delegue/new',function(){
    UtilisateurController::create(array(
        "type" => "DELEGUE",
        "password" => $_POST['password'],
        "promotion" => $_POST['promo'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "permission" => $_POST['permission'],
        "file" => $_FILES['photo']
    ));
},"POST");
Route::add('/etudiant/update/([0-9]*)',function($var1){
    UtilisateurController::update(array(
        'id' => $var1,
        "type" => "ETUDIANT",
        "password" => $_POST['password'],
        "promotion" => $_POST['promotion'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "file" => $_POST['photo']
    ));
},"POST");
Route::add('/pilote/update/([0-9]*)',function($var1){
    UtilisateurController::update(array(
        "id" => $var1,
        "type" => "PILOTE",
        "password" => $_POST['password'],
        "promotion" => $_POST['promotion'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "file" => $_POST['photo']
    ));
},"POST");
Route::add('/delegue/update/([0-9]*)',function($var1){
    UtilisateurController::update(array(
        "id" => $var1,
        "type" => "DELEGUE",
        "password" => $_POST['password'],
        "promotion" => $_POST['promotion'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "centre" => $_POST['centre'],
        "permission" => $_POST['permission'],
        "file" => $_POST['photo']
    ));
},"POST");
Route::add('/pilote/update/([0-9]*)',function($var1){
    UtilisateurController::updateindex(array(
        "id_utilisateur" => $var1,
        "type" => "PILOTE"
    ));
});
Route::add('/etudiant/update/([0-9]*)',function($var1){
    UtilisateurController::updateindex(array(
        "id_utilisateur" => $var1,
        "type" => "ETUDIANT"
    ));
});
Route::add('/delegue/update/([0-9]*)',function($var1){
    UtilisateurController::updateindex(array(
        "id_utilisateur" => $var1,
        "type" => "DELEGUE"
    ));
});
Route::add('/etudiant/([0-9]*)',function($var1){
    //afficher un etudiant
    UtilisateurController::read(Array(
        'type' => 'ETUDIANT',
        'id_utilisateur' => $var1
    ));
});
Route::add('/pilote/([0-9]*)',function($var1){
    //afficher un pilote
    UtilisateurController::read(Array(
        'type' => 'PILOTE',
        'id_utilisateur' => $var1
    ));
});
Route::add('/admin/([0-9]*)',function($var1){
    //afficher un pilote
    UtilisateurController::read(Array(
        'type' => 'ADMIN',
        'id_utilisateur' => $var1
    ));
});
Route::add('/delegue/([0-9]*)',function($var1){
    //afficher un delegue
    UtilisateurController::read(Array(
        'type' => 'DELEGUE',
        'id_utilisateur' => $var1
    ));
});
/*  --------------- wishliste  ---------------*/
Route::add('/wishlist',function(){
    OffreController::wishlistindex($_SESSION['current_user']['id']);
});
Route::add('/wishlist/([0-9]*)',function($var1){
    OffreController::wishlistadd(array(
        "id_utilisateur" => $_SESSION['current_user']['id'],
        "id_offre" => $var1
    ));
});
Route::add('/wishlist/delete/([0-9]*)',function($var1){
    OffreController::wishlistremove($var1);
});
Route::pathNotFound(function(){
    View::display('notfound');
});
Route::methodNotAllowed(function(){
    View::display('notallowed');
});

Route::run();



?>