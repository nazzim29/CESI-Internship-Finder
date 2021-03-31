<?php
require_once('view\View.php');
require_once('models\Utilisateur.php');
class UtilisateurController
{
    public function index()
    {

    }
    public function create($postdata)
    {
        if(isset($_SESSION['current_user'])){
            switch($_SESSION['current_user']['type']){
                case 'PILOTE':
                case 'ADMIN':
                    $etudiant = new Utilisateur();
                    $avoir = new Avoir();
                    $id_user = $etudiant->post(array(
                        'password' => password_hash($postdata['password'],PASSWORD_BCRYPT,['cost'=> 12]),
                        'type' => $postdata['type'],
                        'promotion' => $postdata['promotion'],
                        'nom' => $postdata['nom'],
                        'prenom' => $postdata['prenom'],
                        'email' => $postdata['email'],
                        'id_centre' => $postdata['centre'],
                        'id_createur' => $_SESSION['current_user']['id']
                    ));

                    if($id_user == "Cette utilisateur existe deja dans la base de données"){
                        View::display('formuser',array(
                            'erreur' => $id_entr
                        ));
                    }else{
                        if($postdata['type'] == "DELEGUE"){
                            foreach ($postdata['permission'] as $key => $value) {
                                $avoir->create(array(
                                    "id_utilisateur" => $id_user,
                                    "id_permission" => $value
                                ));
                            }
                        }
                        if(substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"image/etudiant/".$id_user.".png");
                            header("Location: ".$id_user."");
                        }else{
                            View::display('formentr',array(
                                'erreur' => "veuillez uploader une image au format png"
                            ));
                        }
                    }
                break;
                case 'DELEGUE':
                    if(array_search('sfx23',$_SESSION['current_user']['permission'])){
                        $etudiant = new Utilisateur();
                        $id_etu = $etudiant->post(array(
                            'password' => password_hash($postdata['password'],PASSWORD_BCRYPT,['cost'=> 12]),
                            'type' => "ETUDIANT",
                            'promotion' => $postdata['promotion'],
                            'nom' => $postdata['nom'],
                            'prenom' => $postdata['prenom'],
                            'email' => $postdata['email'],
                            'id_centre' => $postdata['centre'],
                            'id_createur' => $_SESSION['current_user']['id']
                        ));
                        if($id_etu == "Cette utilisateur existe deja dans la base de données"){
                            View::display('formuser',array(
                                'erreur' => $id_entr
                            ));
                        }else{
                            if(substr($postdata['file']['name'],-4) == '.png'){
                                move_uploaded_file($postdata['file']['tmp_name'],"image/etudiant/".$id_etu.".png");
                                header("Location: ".$id_etu."");
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
    public function delete($postdata)
    {
        if(isset($_SESSION['current_user'])){
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                    $e = new Utilisateur();
                    $e->delete($postdata);
                break;
                case 'DELEGUE':
                    if(array_search('sfx25',$_SESSION['current_user']['permission']) & array_search('sfx11',$_SESSION['current_user']['permission'])){
                        $e = new Utilisateur();
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
