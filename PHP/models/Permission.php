<?php
class Permission
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
        $this->$_id = $id;
    }
    public function setnom(string $nom)
    {
        $this->$_nom = $nom;
    }

}
