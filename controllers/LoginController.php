<?php 
require_once('models\Utilisateur.php');
require_once('models\Avoir.php');
require_once('models\Permission.php');
require_once('view\View.php');
require_once('libs\smarty-3.1.39\libs\Smarty.class.php');
class LoginController
{
    
    function __construct(){
        
    }
    function __destruct()
    {
        $smarty = null;
    }
    public function get()
    {
        if(isset($_SESSION['current_user'])){
            header('Location: /home');
        }else{
            $param = null;
            if(isset($_COOKIE['cesiifemail']) & isset($_COOKIE['cesiifpassword'])){
                $param = array(
                    'passwordvalue' => $_COOKIE['cesiifpassword'],
                    'emailvalue' => $_COOKIE['cesiifemail']
                );
            }
            View::display('login',$param);
        }
    }


    public function post(Array $postdata){
        $user = new Utilisateur();  
        $s = $user->selectbyemail($postdata);
        if($s == false){
            View::display('login',array(
                'error'=>'utilisateur inconnue'
            ));
        }else if(password_verify($postdata['password'],$s['Password'])){
            if(isset($postdata['remember'])){
                setcookie('cesiifemail',$postdata['email']);
                setcookie('cesiifpassword',$postdata['password']);
            }
            $lstperm = null;
            if($s['TYPE'] == "DELEGUE"){
                $d = new Avoir();
                $p = new Permission();
                $usrperm = $d->selectbyuser($s);
                $lstperm = $p->read();
                foreach ($usrperm as $key => $value) {
                    $usrperm[$key] = $lstperm[array_search($value['Id_permission'],array_column($lstperm,'Id_permission'))]['Nom'];
                }
            }
            $_SESSION['current_user'] = array(
                'id' => $s['Id_utilisateur'],
                'email' =>$s['Email'],
                'password' =>$postdata['password'],
                'type' =>$s['Type'],
                'nom' =>$s['Nom'],
                'prenom' =>$s['Prenom'],
                'permission' => $usrperm,
                'promotion' => $s['Promotion'],
                'id_centre' => $s['Id_centre']
            );
            header('Location: home');
        }else{
            View::display('login',array(
                'error' => 'Mot de passe incorrect'
            ));
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
}
