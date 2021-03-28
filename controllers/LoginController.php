<?php 
require_once('models\Utilisateur.php');
require_once('models\Avoir.php');
require_once('models\Permission.php');
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
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        if(isset($_SESSION['current_user'])){
            header('Location: /home');
        }else{
            if(isset($_COOKIE['cesiifemail']) & isset($_COOKIE['cesiifpassword'])){
                $smarty->assign('passwordvalue',$_COOKIE['cesiifpassword']);
                $smarty->assign('emailvalue',$_COOKIE['cesiifemail']);
            }
            $smarty->display('login.tpl');
        }
    }


    public function post(Array $postdata){
        $user = new Utilisateur();  
        $s = $user->selectbyemail($postdata);
        if($s == false){
            $smarty = new Smarty();
            $smarty->template_dir = 'layout';
            $smarty->compile_dir = 'tmp';
            $smarty->assign('error','utilisateur inconnue');
            $smarty->display('login.tpl');
        }else if(password_verify($postdata['password'],$s['PASSWORD'])){
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
                'type' =>$s['TYPE'],
                'nom' =>$s['Nom'],
                'prenom' =>$s['Prenom'],
                'permission' => $usrperm
            );
            header('Location: home');
        }else{
            $smarty = new Smarty();
            $smarty->template_dir = 'layout';
            $smarty->compile_dir = 'tmp';
            $smarty->assign('error','Mot de passe incorrect');
            $smarty->display('login.tpl');
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
}
