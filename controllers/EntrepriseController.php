<?php
require_once('models\competencesRecherchees.php');
require_once('view\View.php');
require_once('models\Entreprise.php');
require_once('models\Note.php');
require_once('models\Souhaite.php');
require_once('models\Postule.php');
require_once('models\Requiert.php');

class EntrepriseController
{
    public function index()
    {
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'ADMIN':
                case 'PILOTE':
                case 'ETUDIANT':
                    View::display('indexentreprise');
                break;
                case 'DELEGUE':
                    if(array_search('sfx2',$_SESSION['current_user']['permision']) !== false){
                        View::display('indexentreprise');
                    }else{
                        header('Location: accessinterdit');
                    }
                break;
                default:
                    header('Location: accessinterdit');
                break;
            }

        }else {
            header('Location: login');
        }
    }
    public function indexnew(){
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'ADMIN':
                case 'PILOTE':
                    View::display('formentr');
                break;
                case 'DELEGUE':
                    if(array_search('sfx2',$_SESSION['current_user']['permision']) !== false){
                        View::display('formentr');
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
            switch($_SESSION['current_user']['type']){
                case 'PILOTE':
                case 'ADMIN':
                    $entr = new Entreprise();
                    $id_entr = $entr->create($postdata);
                    if($id_entr == "l'email de cette entreprise existe deja dans la base de données"){
                        View::display('formentr',array(
                            'erreur' => $id_entr
                        ));
                    }else{
                        if(substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$id_entr.".png");
                            header("Location: ".$id_entr."");
                        }else{
                            View::display('formentr',array(
                                'erreur' => "veuillez uploader une image au format png"
                            ));
                        }
                    }
                break;
                case 'DELEGUE':
                    if(array_search('sfx3',$_SESSION['current_user']['permission'])){
                        $entr = new Entreprise();
                        $id_entr = $entr->create($postdata);
                        if($id_entr == "l'email de cette entreprise existe deja dans la base de données"){
                            View::display('formentr',array(
                                'erreur' => $id_entr
                            ));
                        }else{
                            if(substr($postdata['file']['name'],-4) == '.png'){
                                move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$id_entr.".png");
                                header("Location: ".$id_entr."");
                            }else{
                                View::display('formentr',array(
                                    'erreur' => "veuillez uploader une image au format png"
                                ));
                            }
                        }

                    }else{
                        header('Location : accessinterdit');
                    }
                break;
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
                echo json_encode($s);
                http_response_code(200);
            }
        }else{
            http_response_code(401);
        }
    }
    public function updateindex($postdata)
    {
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                    $e = new Entreprise();
                    $r = $e->read($postdata);
                    View::display('formentr',array(
                        'en' => $r[0]
                    ));
                    
                break;
                case 'DELEGUE':
                    if(array_search('sfx4',$_SESSION['current_user']['permission'])){
                        $e = new Entreprise();
                        $r = $e->read($postdata);
                        View::display('formentr',array(
                            'en' => $r[0]
                        ));
                    }else{
                        header('Location : accessinterdit');
                    }
                break;
                default:
                    header('Location : login');
                break;
            }
        }else{
            header('Location : login');
        }
    }
    public function update($postdata){
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                    $e = new Entreprise();
                    $ee = $e->update($postdata);
                    if($ee != null){
                        View::display('formentr',array(
                            'erreur' => $ee
                        ));
                    }else{
                        if(substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$postdata['id_entreprise'].".png");
                            header("Location: ".$postdata['id_entreprise']."");
                        }else{
                            View::display('formentr',array(
                                'erreur' => "veuillez uploader une image au format png"
                            ));
                        }
                    }
                break;
                case 'DELEGUE':
                    if(array_search('sfx4',$_SESSION['current_user']['permission'])){
                        $e = new Entreprise();
                        $ee = $e->update($postdata);
                        if($ee != null){
                            View::display('formentr',array(
                                'erreur' => $ee
                            ));
                        }else{
                            if(substr($postdata['file']['name'],-4) == '.png'){
                                move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$postdata['id_entreprise'].".png");
                                header("Location: ".$postdata['id_entreprise']."");
                            }else{
                                View::display('formentr',array(
                                    'erreur' => "veuillez uploader une image au format png"
                                ));
                            }
                        }
                    }else{
                        header('Location : accessinterdit');
                    }
                break;
                default:
                    header('Location : login');
                break;
            }
        }else{
            header('Location : login');
        }
        
    }
    public function delete($postdata)
    {
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                    $n = new Note();
                    $n->deletebyentr($postdata);
                    $o = new Offre();
                    $s = new Souhaite();
                    $p = new Postule();
                    $r = new Requiert();
                    $e = new Entreprise();
                    $lsto = $o->selectbyentr($postdata);
                    foreach ($lsto as $key => $value) {
                        $s->deletebyoffre($value->Id_offre);
                        $p->deletebyoffre($value->Id_offre);
                        $r->deletebyoffre($value->Id_offre);
                        $o->delete($value->Id_offre);
                    }
                    $e->delete($postdata);
                break;
                case 'DELEGUE':
                    if(array_search('sfx6',$_SESSION['current_user']['permission']) & array_search('sfx11',$_SESSION['current_user']['permission'])){
                        $n = new Note();
                        $n->deletebyentr($postdata);
                        $o = new Offre();
                        $s = new Souhaite();
                        $p = new Postule();
                        $r = new Requiert();
                        $e = new Entreprise();
                        $lsto = $o->selectbyentr($postdata);
                        foreach ($lsto as $key => $value) {
                            $s->deletebyoffre($value->Id_offre);
                            $p->deletebyoffre($value->Id_offre);
                            $r->deletebyoffre($value->Id_offre);
                            $o->delete($value->Id_offre);
                        }
                        $e->delete($postdata);
                    }else{
                        header('Location : accessinterdit');
                    }
                break;
                default:
                    header('Location : accessinterdit');
                break;
            }
        }else{
            header('Location : login');
        }
    }
}
