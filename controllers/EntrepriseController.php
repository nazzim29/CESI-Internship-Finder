<?php
require_once('models\competencesRecherchees.php');
require_once('models\Entreprise.php');
require_once('models\Note.php');
class EntrepriseController
{
    public function index()
    {
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        $smarty->display();
    }
    public function indexnew(){
        if(isset($_SESSION['current_user'])){
            $smarty = new Smarty();
            $smarty->template_dir = 'layout';
            $smarty->compile_dir = 'tmp';
            $smarty->assign('_SESSION',$_SESSION);
            $smarty->display('formentr.tpl');
        }else{
            header('Location: /');
        }
    }
    public function post($postdata)
    {
        if(isset($_SESSION['current_user']) & ($_SESSION['current_user']['type'] == 'ADMIN' || $_SESSION['current_user']['type'] == 'PILOTE' || ($_SESSION['current_user']['type'] == 'DELEGUE' & array_search('sfx3', $_SESSION['current_user']['permission'])))){
            $entr = new Entreprise();
            $n = new Note();
            $id_entr = $entr->create($postdata);
            $n->create(array(
                'id_entreprise' => $id_entr,
                'id_utilisateur' => $_SESSION['current_user']['id'],
                'rate' => $postdata['rate'],
                'commentaire' => $postdata['commentaire']
            ));
        }
        header('Location: .\ ');
    }
    public function recherche($postdata)
    {
        
    }
}
