<?php
require_once('models\Offre.php');
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
        $smarty->display('NewOffre.tpl');
    }
    public function afficher($postdata)
    {
        $o=new Offre();
        $p=$o->select(array(
            'titre' => $postdata['titre']
        ));
    }
}
