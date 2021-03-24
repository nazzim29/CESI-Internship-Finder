<?php 
require_once('PHP\models\Utilisateur.php');
require_once('PHP\models\Avoir.php');
require_once('PHP\models\Permission.php');
require_once('PHP\smarty-3.1.39\libs\Smarty.class.php');
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
            $this->$smarty->display('login.tpl');
        }
    }
    public function post(Array $postdata){
        $user = new Utilisateur();
        $user->selectbyemail("nazim.kadouche.dz@viacesi.fr");
        

    }
}
