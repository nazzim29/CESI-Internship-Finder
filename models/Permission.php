<?php
require_once('libs\db.php');
class Permission Extends Db
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
    public function create(){

    }
    public function read(){
        $req = $this->db->prepare("select * from permission");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update(){

    }
    public function delete(){
        
    }

}
