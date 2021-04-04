<?php
require_once('libs\db.php');
class Entreprise Extends Db
{

    public function create($postdata)
    {
        try{

            $req = $this->db->prepare("INSERT INTO `entreprise`(`Secteur_activite`, `Localite`, `Raison_social`, `Email`, `Date_creation`, `Nb_stage`)  values (?,?,?,?,now(),?)");
            $req->bindvalue(1,$postdata['secteur_dactivite']);
            $req->bindvalue(2,$postdata['localite']);
            $req->bindvalue(3,$postdata['raison_sociale']);
            $req->bindvalue(4,$postdata['email']);
            $req->bindvalue(5,$postdata['nb_etu']);
            $req->execute();
            $req = $this->db->prepare("SELECT LAST_INSERT_ID() as 'id';");
            $req->execute();
            $res = $req->fetch(PDO::FETCH_OBJ);
            return $res->id;
        }catch(PDOException $e){
            if(strpos($e->getmessage(),'Integrity constraint violation') !== false){
                return "Cette entreprise existe deja dans la base de données";
            }
        }
    }
    public function read($id = null)
    {
        $r = "SELECT * FROM `entreprise` ";
        if (isset($id)) {
            $r .= "where Id_entreprise = ?";
        }
        $req = $this->db->prepare($r);
        if(isset($id)){
            $req->bindvalue(1,$id);
        }
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
    public function update($postdata)
    {
        try{
            $req = $this->db->prepare('UPDATE `entreprise` SET `Secteur_activite`=?,`Localite`=?,`Raison_social`=?,`Email`=? WHERE `Id_entreprise` = ?');
            $req->bindvalue(1,$postdata['secteur_dactivite']);
            $req->bindvalue(2,$postdata['localite']);
            $req->bindvalue(3,$postdata['raison_sociale']);
            $req->bindvalue(4,$postdata['email']);
            $req->bindvalue(5,$postdata['id_entreprise']);
            $req->execute();
        }catch(PDOException $e){
            if(strpos($e->getmessage(),'Integrity constraint violation') !== false){
                return "l'email de cette entreprise existe deja dans la base de données";
            }
        }
    }
    public function delete($postdata)
    {
        $req = $this->db->prepare('DELETE FROM entreprise where Id_entreprise = ?');
        $req->bindvalue(1,$postdata);
        $req->execute();
    }
}
