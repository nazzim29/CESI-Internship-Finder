<?php
require_once('models\competencesRecherchees.php');
require_once('models\Entreprise.php');
require_once('models\Note.php');
class EntrepriseController
{
    public function index()
    {
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'ADMIN':
                case 'PILOTE':
                case 'ETUDIANT':
                    $smarty = new Smarty();
                    $smarty->template_dir = 'layout';
                    $smarty->compile_dir = 'tmp';
                    $smarty->assign('_SESSION',$_SESSION);
                    $smarty->display('indexentreprise.tpl');
                break;
                case 'DELEGUE':
                    if(array_search('sfx2',$_SESSION['current_user']['permision']) !== false){
                        $smarty = new Smarty();
                        $smarty->template_dir = 'layout';
                        $smarty->compile_dir = 'tmp';
                        $smarty->assign('_SESSION',$_SESSION);
                        $smarty->display('indexentreprise.tpl');
                    }else{
                        header('Location: accessinterdit');
                    }
                break;
                default:
                    header('Location: accessinterdit');
                break;
            }

        }else {
            header('Location: ..\login');
        }
    }
    public function indexnew(){
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'ADMIN':
                case 'PILOTE':
                    $smarty = new Smarty();
                    $smarty->template_dir = 'layout';
                    $smarty->compile_dir = 'tmp';
                    $smarty->assign('_SESSION',$_SESSION);
                    $smarty->display('formentr.tpl');
                break;
                case 'DELEGUE':
                    if(array_search('sfx2',$_SESSION['current_user']['permision']) !== false){
                        $smarty = new Smarty();
                        $smarty->template_dir = 'layout';
                        $smarty->compile_dir = 'tmp';
                        $smarty->assign('_SESSION',$_SESSION);
                        $smarty->display('formentr.tpl');
                    }else{
                        header('Location: accessinterdit');
                    }
                break;
                case 'ETUDIANT':
                default:
                    header('Location: accessinterdit');
                break;
            }
                    
        }else{
            header('Location: login');
        }
    }
    public function post($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($_SESSION['current_user']['type'] == 'ADMIN' | $_SESSION['current_user']['type'] == 'PILOTE' | ($_SESSION['current_user']['type'] == 'DELEGUE' & array_search('sfx3', $_SESSION['current_user']['permission']))){
                $entr = new Entreprise();
                $n = new Note();
                $id_entr = $entr->create($postdata);
                $n->create(array(
                    'id_entreprise' => $id_entr,
                    'id_utilisateur' => $_SESSION['current_user']['id'],
                    'rate' => $postdata['rate'],
                    'commentaire' => $postdata['commentaire']
                ));
                header('Location : entreprise');
            }else {
                header('Location : accessinterdit');
            }
        }else {
            header('Location : login');
        }
    }
    public function recherche()
    {
        header("Content-Type: application/json");
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                case 'ETUDIANT':
                    $entr = new Entreprise();
                    $s = $entr->read(); 
                break;
                case 'DELEGUE':
                    if (array_search('sfx2',$_SESSION['current_user']['permission'])) {
                        $entr = new Entreprise();
                        $s = $entr->read(); 
                    }else{
                        http_response_code(401);
                    }
                default:
                    http_response_code(401);
                break;
            }
            if($s === false){
                http_response_code(220);
                return "aucun resultat";
            }else{
                http_response_code(200);
                echo json_encode($s);
            }
        }else{
            http_response_code(401);
        }
    }
}
