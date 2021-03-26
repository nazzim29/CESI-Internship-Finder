<?php
require_once('libs\db.php');
class CompetencesRecherchees extends Db
{
    protected $_id;
    protected $_nom;

    public function getid()
    {
        return $this->$_id;
    }
    public function getnom()
    {
        return $this->$_nom;
    }
    public function setid(int $id)
    {
        $this->$_id =$id;
    }
    public function setnom(string $nom)
    {
        $this->$_nom = $nom;
    }
    public function create()
    {
        # code...
    }
    public function read()
    {

    }
    public function update()
    {
        # code...
    }
    public function delete()
    {
        # code...
    }
}
