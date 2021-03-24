<?php
require_once('db.php');
class Requiert Extends Db
{
    protected $_id_competence;
    protected $_id_offre;


    public function getidcompetence()
    {
        return $this->$_id_competence;
    }
    public function getidoffre()
    {
        return $this->$_id_offre;
    }
    public function setidcompetence(int $id)
    {
        $this->$_id_competence = $id;
    }
    public function setidoffre(int $id)
    {
        $this->$_id_offre = $id;
    }
}
