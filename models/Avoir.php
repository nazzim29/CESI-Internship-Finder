<?php
require_once('libs\db.php');
class Avoir Extends Db
{
    protected $_id_permission;

    protected $_id_utilisateur;
    
    public function getidutilisateur(){
        return $this->$_id_utilisateur;
    }

    public function getidpermission(){
        return $this->$_id_permission;
    }

    public function setidutilisateur(int $idutilisateur)
    {
        $this->$_id_utilisateur = $idutilisateur;
    }
    
    public  function setidpermission(int $idpermission)
    {
        $this->$_id_permission = $idpermission;
    }
    public function selectbyuser($s){
        $req = $this->db->prepare("select Id_permission from avoir where Id_utilisateur = ?");
        $req->bindvalue(1,$s['Id_utilisateur']);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create(){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){
        
    }
}

