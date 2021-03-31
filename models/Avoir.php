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
    public function create($postdata){
        $req = $this->db->prepare("INSERT INTO `avoir`(`Id_permission`, `Id_utilisateur`) VALUES (?,?)");
        $req->bindvalue(2,$postdata['id_utilisateur']);
        $req->bindvalue(1,$postdata['id_permission']);
        $req->execute();

    }
    public function read(){

    }
    public function update(){

    }
    public function deletebyusee($postdata){
        $req = $this->db->prepare("delete from avoir where Id_utilisateur = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        
    }
}

