<?php
require_once('models\Offre.php');
require_once('models\Requiert.php');
class OffreController  
{
    public function index()
    {
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        $smarty->display();
    }
    public function indexnew()
    {
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        $smarty->assign('_SESSION',$_SESSION);
        $smarty->display('NewOffre.tpl');
    }
    public function afficher($postdata)
    {
        $o=new Offre();
        $p=$o->select(array(
            'titre' => $postdata['titre']
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
