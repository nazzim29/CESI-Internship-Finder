<?php
require_once('models\competencesRecherchees.php');
require_once('models\Entreprise.php');
require_once('models\Note.php');
class EntrepriseController
{
    public function get(){
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
}
