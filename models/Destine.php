<?php
require_once('db.php');
class Destine Extends Db
{
    protected $_id_promotion;
    protected $_id_offre;
    public function getidpromotion()
    {
        return $this->$_id_promotion;
    }
    public function getidoffre()
    {
        return $this->$_id_offre;
    }
    public function setidpromotion(int $id)
    {
        $this->$_id_promotion = $id;
    }
    public function setidoffre(int $id)
    {
        $this->$_id_offre = $id;
    }
}
