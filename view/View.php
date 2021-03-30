<?php
require_once('libs\smarty-3.1.39\libs\Smarty.class.php');
class View
{
    protected static $smarty;
    public function display(string $v,$params= null){
        $smarty = new Smarty();
        $smarty->template_dir = 'layout';
        $smarty->compile_dir = 'tmp';
        $smarty->assign("_SESSION",$_SESSION);
        if(isset($params)){
            foreach ($params as $key => $value) {
                $smarty->assign($key,$value);
            }
        }
        $smarty->display($v.'.tpl');

    }

}
