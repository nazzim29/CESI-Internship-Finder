<?php
require_once('view\View.php');
require_once('models\Utilisateur.php');
require_once('models\Centre.php');
class UtilisateurController
{
    public function indexnew($type)
    {
        $centre = new Centre();
        $centres = $centre->select();
        View::display('formuser',array(
            "type" => $type,
            "centres" => $centres
        ));
    }
    public function rechercheindex($s){
        View::display('indexentreprise',array(
            "type" => $s
        ));
    }
    public function recherche($postdata){

    }
    public function read($postdata)
    {
        if(isset($_SESSION['current_user'])){
            $utilisateur=new Utilisateur();
            $u=$utilisateur->select($postdata["id_utilisateur"]);
            if($u['Type']==$postdata["type"]){
                $utilisateur->visitincr($u['Id_utilisateur']);
                View::display('profile',array(
                    "user"=>$u,
                )); 
            }else{
                View::display('notfound');
            }
        }
        else{
            header("Location: /login");
        }
    }
    public function updateindex($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($postdata['type'] == "PILOTE"){
                if($_SESSION['current_user']['type'] == "ADMIN" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx15',$_SESSION['current_user']['permission']))){
                    $user = new Utilisateur();
                    $u = $user->select($postdata['id_utilisateur']);
                    if($u['Type'] == $postdata['type']){
                        $centre = new Centre();
                        $centres = $centre->select();
                        View::display('formuser',array(
                            "user" =>$u,
                            "type" => $postdata['type'],
                            "centres" => $centres
                        ));
                    }else{
                        header('Location : /'.$u["Type"]."/".$postdata['id_utilisateur']);
                    }
                }else{
                    header('Location: /accessinterdit');
                }
            }else if($postdata['type'] == "DELEGUE"){
                if($_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx19',$_SESSION['current_user']['permission']))){
                    $user = new Utilisateur();
                    $u = $user->select($postdata['id_utilisateur']);
                    if($u['Type'] == $postdata['type']){
                        $centre = new Centre();
                        $centres = $centre->select();
                        $permission = new Avoir();
                        $p = $permission->selectbyuser($u['Id_utilisateur']);
                        foreach ($p as $key => $value) {
                            $p[$key] = $value['Id_permission'];
                        }
                        View::display('formuser',array(
                            "permission" =>$p,
                            "user" =>$u,
                            "type" => $postdata['type'],
                            "centres" => $centres
                        ));
                    }else{
                        header('Location : /'.$u["Type"]."/".$postdata['id_utilisateur']);
                    }
                }else{
                    header('Location: /accessinterdit');
                }

            }else{
                if($_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "PILOTE" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx23',$_SESSION['current_user']['permission']))){
                    $user = new Utilisateur();
                    $u = $user->select($postdata['id_utilisateur']);
                    if($u['Type'] == $postdata['type']){
                        $centre = new Centre();
                        $centres = $centre->select();
                        View::display('formuser',array(
                            "user" =>$u,
                            "type" => $postdata['type'],
                            "centres" => $centres
                        ));
                    }else{
                        header('Location : /'.$u["Type"]."/".$postdata['id_utilisateur']);
                    }
                }else{
                    header('Location: /accessinterdit');
                }
            }
        }else{
            
            header('Location: /login');   
        }
    }
    public function update($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($postdata['type'] == "DELEGUE"){
                $sfxmod = 'sfx19';
            }else if($postdata['type'] == "PILOTE"){
                $sfxmod = 'sfx15';
            }else if($postdata['type'] == "ETUDIANT"){
                $sfxmod = 'sfx24';
            }
            switch ($_SESSION['current_user']['type']) {
                case 'PILOTE':
                case 'ADMIN':
                    $e = new Utilisateur();
                    $ee = $e->update($postdata);
                    if($ee != null){
                        View::display('formentr',array(
                            'erreur' => $ee
                        ));
                    }else{
                        $droit = new Avoir();
                        $droit->deletebyuser($postdata["id"]);
                        foreach ($postdata['permission'] as $key => $value) {
                            $droit->create(array(
                                "id_utilisateur" => $postdata["id"],
                                "id_permission" => $value
                            ));
                        }
                        if(isset($postdata['file'])){
                            if(substr($postdata['file']['name'],-4) == '.png'){
                                move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$postdata['id_entreprise'].".png");
                                header("Location: ".$postdata['id_entreprise']."");
                            }else{
                                View::display('formentr',array(
                                    'erreur' => "veuillez uploader une image au format png"
                                ));
                            }
                        }
                    }
                break;
                case 'DELEGUE':
                    if(array_search($sfxmod,$_SESSION['current_user']['permission'])){
                        $e = new Utilisateur();
                        $ee = $e->update($postdata);
                        if($ee != null){
                            View::display('formentr',array(
                                'erreur' => $ee
                            ));
                        }else{

                            if($postdata['type'] == "DELEGUE" & array_search('sfx21',$_SESSION['current_user']['permission'])){
                                $droit = new Avoir();
                                $droit->deletebyuser($postdata["id"]);
                                foreach ($postdata['permission'] as $key => $value) {
                                    $avoir->create(array(
                                        "id_utilisateur" => $id_user,
                                        "id_permission" => $value
                                    ));
                                }
                            }
                            if(isset($postdata['file'])){
                                if(substr($postdata['file']['name'],-4) == '.png'){
                                    move_uploaded_file($postdata['file']['tmp_name'],"image/entreprise/".$postdata['id_entreprise'].".png");
                                    header("Location: ".$postdata['id_entreprise']."");
                                }else{
                                    View::display('formentr',array(
                                        'erreur' => "veuillez uploader une image au format png"
                                    ));
                                }
                            }
                        }
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
    public function create($postdata){
        if(isset($_SESSION['current_user'])){
            if($postdata['type'] == "DELEGUE"){
                if ($_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_ucer']['type'] == "PILOTE" || ($_SESSION['current_user']['type'] == "DELEGUE" & array_search('sfx18',$_SESSION['current_user']['permission']))) {
                    $user = new Utilisateur();
                    $avoir = new Avoir();
                    $id_user = $user->create(array(
                        'password' => password_hash($postdata['password'],PASSWORD_BCRYPT,['cost'=> 12]),
                        'type' => "DELEGUE",
                        'promotion' => $postdata['promotion'],
                        'nom' => $postdata['nom'],
                        'prenom' => $postdata['prenom'],
                        'email' => $postdata['email'],
                        'centre' => $postdata['centre'],
                        'createur' => $_SESSION['current_user']['id']
                    ));

                    if($id_user == "Cet utilisateur existe deja dans la base de données"){
                        $centre = new Centre();
                        $centres = $centre->select();
                        View::display('formuser',array(
                            "erreur" => $id_user,
                            "type" => $type,
                            "centres" => $centres
                        ));

                    }else{
                        if(isset($postdata['permission'])){ 
                            foreach ($postdata['permission'] as $key => $value) {
                                $avoir->create(array(
                                    "id_utilisateur" => $id_user,
                                    "id_permission" => $value
                                ));
                            }
                        }
                        if(substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"\image/delegue/".$id_user.".png");
                        }   
                        header("Location: ".$id_user."");
                    }
                }else{
                    header('Location : accessinterdit');
                }
            }else if($postdata['type'] == "PILOTE"){
                if($_SESSION['current_user']['type'] == 'ADMIN' || ($_SESSION['current_user']['type'] == 'DELEGUE' & array_search('sfx14',$_SESSION['current_user']['permission']))) {
                    $user = new Utilisateur();
                    $id_user = $user->create(array(
                        'password' => password_hash($postdata['password'],PASSWORD_BCRYPT,['cost'=> 12]),
                        'type' => "PILOTE",
                        'promotion' => $postdata['promotion'],
                        'nom' => $postdata['nom'],
                        'prenom' => $postdata['prenom'],
                        'email' => $postdata['email'],
                        'centre' => $postdata['centre'],
                        'createur' => $_SESSION['current_user']['id']
                    ));
                    if($id_user == "Cet utilisateur existe deja dans la base de données"){
                        $centre = new Centre();
                        $centres = $centre->select();
                        View::display('formuser',array(
                            "erreur" =>$id_user,
                            "type" => $type,
                            "centres" => $centres
                        ));
                    }else{
                        if(isset($postdata['file']) & substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"image/pilote/".$id_user.".png");
                        }
                        header("Location: ".$id_user."");
                    } 
                }else{
                    header('Location : accessinterdit');
                }
                
            }else if($postdata['type'] == "ETUDIANT"){
                if($_SESSION['current_user']['type'] == "ADMIN" || $_SESSION['current_user']['type'] == "ADMIN" || ($_SESSION['current_user']['type'] == 'DELEGUE' & array_search('sfx23',$_SESSION['current_user']['permission']))){
                    $user = new Utilisateur();
                    $id_user = $user->create(array(
                        'password' => password_hash($postdata['password'],PASSWORD_BCRYPT,['cost'=> 12]),
                        'type' => "ETUDIANT",
                        'promotion' => $postdata['promotion'],
                        'nom' => $postdata['nom'],
                        'prenom' => $postdata['prenom'],
                        'email' => $postdata['email'],
                        'centre' => $postdata['centre'],
                        'createur' => $_SESSION['current_user']['id']
                    ));
                    if($id_user == "Cet utilisateur existe deja dans la base de données"){
                        $centre = new Centre();
                        $centres = $centre->select();
                        View::display('formuser',array(
                            "type" => $type,
                            "centres" => $centres,
                            "erreur" => $id_user
                        ));
                    }else{
                        if(substr($postdata['file']['name'],-4) == '.png'){
                            move_uploaded_file($postdata['file']['tmp_name'],"image/etudiant/".$id_user.".png");
                        }
                        header("Location: ".$id_user."");
                    } 
                }else{
                    header('Location : accessinterdit');
                }
            }
        }else {
            header('Location : login');
        }
    }
    public function delete($postdata)
    {
        if(isset($_SESSION['current_user'])){
            if($postdata['type'] == "DELEGUE"){
                if($_SESSION['current_user']['type'] == 'ADMIN' || $_SESSION['current_user']['type'] == 'PILOTE' ||($_SESSION['current_user']['type']== 'DELGUE' & array_search('sfx20',$_SESSION['current_user']['permission']))){
                    $e = new Utilisateur();
                    $e->delete($postdata);
                }else{
                    header("Location: /accessinterdit");
                }
            }else if($postdata['type'] == "PILOTE"){
                if($_SESSION['current_user']['type'] == 'ADMIN' ||($_SESSION['current_user']['type']== 'DELGUE' & array_search('sfx16',$_SESSION['current_user']['permission']))){
                    $e = new Utilisateur();
                    $e->delete($postdata);
                }else{
                    header("Location: /accessinterdit");
                }
            }else if($postdata['type'] == "ETUDIANT"){
                if($_SESSION['current_user']['type'] == 'ADMIN' || $_SESSION['current_user']['type'] == 'PILOTE' ||($_SESSION['current_user']['type']== 'DELGUE' & array_search('sfx26',$_SESSION['current_user']['permission']))){
                    $e = new Utilisateur();
                    $e->delete($postdata);
                }else{
                    header("Location: /accessinterdit");
                }
            }
        }else{
            header('Location : login');
        }
    }

}
