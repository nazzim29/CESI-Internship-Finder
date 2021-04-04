<?php
require_once('view\View.php');
require_once('models\Offre.php');
require_once('models\Shouaite.php');
require_once('models\Entreprise.php');

class OffreController  
{
    public function index()
    {
        View::display('formoffre');
    }
    public function indexnew()
    {
        $en = new Entreprise();
        $r = $en ->select();
        View::display('formoffre',array(
            "entr" => $r
        ));
    }
    public function wishlistindex($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($_SESSION['current_user']['type'] == "ETUDIANT"){
                $s = new Souhaite();
                $souhait = $s->selectbyuser($postdata);
                View::display('wishlist',array(
                    'souhait' => $souhait
                ));
            }else{
                header('Location : /accessinterdit');
            }
        }else{
            header('Location: login');
        }
    }
    public function wishlistadd($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($_SESSION['current_user']['type'] == "ETUDIANT"){
                $s = new Souhaite();
                $souhait = $s->post($postdata);
            }else{
                header('Location : accessinterdit');
            }
        }else{
            header('Location: login');
        }
    }
    public function wishlistremove($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($_SESSION['current_user']['type'] == "ETUDIANT"){
                $s = new Souhaite();
                $s->delete(array(
                    "id_utilisateur" => $_SESSION['current_user']['id'],
                    "id_offre" => $postdata
                ));
                header("Location: /wishlist");
            }
        }
    }
    public function post($postdata)
    {
        $o= new Offre();
        $id=$o->create($postdata);
        $r= new Requiert();
        foreach ($postdata["competence"] as $key => $value) 
        {
            $r->post(array(
                "id_offre" => $id,
                "id_competence"=> $postdata["competence"][$key]
            ));
        }
    }



}
