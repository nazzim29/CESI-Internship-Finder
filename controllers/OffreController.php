<?php
require_once('\models\Offre.php')
class OffreController  
{
    public function index()
    {
        $o=new Offre();
        $p=$o->select(array());
        echo $p;
    }
}
