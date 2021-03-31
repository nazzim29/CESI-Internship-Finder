<?php
require_once('view\View.php');
require_once('models\Offre.php');
require_once('models\Requiert.php');
class OffreController  
{
    public function index()
    {
        View::diplay('formoffre');
    }
    public function indexnew()
    {
        View::diplay('formoffre');
    }
    public function profile($postdata)
    {
        
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
