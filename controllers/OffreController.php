<?php
require_once('view\View.php');
require_once('models\Offre.php');
require_once('models\Requiert.php');
require_once('models\Shouaite.php');

class OffreController  
{
    public function index()
    {
        View::display('formoffre');
    }
    public function indexnew()
    {
        View::display('formoffre');
    }
    public function wishlistindex($postdata)
    {
        $s = new Souhaite();
        $souhait = $s->selectbyuser($postdata);
        View::display('wishlist',array(
            'souhait' => $souhait
        ));

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
