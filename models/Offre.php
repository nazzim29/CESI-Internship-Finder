<?php
require_once('libs\db.php');
class Offre Extends Db
{
    protected $_id;
    protected $_description;
    protected $_duree_stage;
    protected $_base_remuneration;
    protected $_nb_place;
    protected $_date_publication;
    protected $_titre;
    protected $_id_entreprise;
    

    public function getid()
    {
        return $this->$_id;
    }
    public function getdescription()
    {
        return $this->$_description;
    }
    public function getdureestage()
    {
        return $this->$_duree_stage;
    }
    public function getbaseremuneration()
    {
        return $this->$_base_remuneration;
    }
    public function getnbplace()
    {
        return $this->$_nb_place;
    }
    public function getdatepublication()
    {
        return $this->$_date_publication;
    }
    public function gettitre()
    {
        return $this->$_titre;
    }
    public function getidentreprise()
    {
        return $this->$_id_entreprise;
    }
    public function setid(int $id)
    {
        $this->$_id = $id;
    }
    public function setdescription(string $desc)
    {
        $this->$_description = $desc;
    }
    public function setdureestage(DateTime $duree)
    {
        $this->$_duree_stage = $duree;
    }
    public function setbaseremuneration(float $remun)
    {
        $this->$_base_remuneration = $remun;
    }
    public function setnbplace(int $nb)
    {
        $this->$_nb_place = $nb;
    }
    public function setdatepublication(DateTime $date)
    {
        $this->$_date_publication = $date;
    }
    public function settitre(string $titre)
    {
        $this->$_titre = $titre;
    }

    public function setidentreprise(int $id)
    {
       $this->$_id_entreprise = $id;
    }
    public function selectbyentr($postdata)
    {
        $req= $this->db->prepare("select * from offre where Id_entreprise = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        $s=$req->fetchAll(PDO::FETCH_OBJ);
        
        return $s;
    }
    public function select($id)
    {
        $req= $this->db->prepare("select * from offre where Id_offre = ?");
        $req->bindvalue(1,$postdata["id"]);
        $req->execute();
        $s=$req->fetchAll(PDO::FETCH_OBJ);
        $req= $this->db->prepare("UPDATE `offre` SET`Nb_vues`= ? WHERE Id_offre = ?");
        $req->bindvalue(1,$s->Nb_vues +1);
        $req->bindvalue(2,$s->Id_offre);
        $req->execute();
        return $s;
    }
    public function create($postdata)
    {
        $req=$this->db->prepare("INSERT INTO `offre`(`Description`, `Date_publication`, `Duree_stage`, `Base_remuneration`, `Nb_places`, `Titre`, `Id_utilisateur`, `Id_entreprise`)(?,now(),?,?,?,?,?,?)");
        $req->biendvalue(1,$postdata["description"]);
        $req->biendvalue(2,$postdata["duree_stage"]);
        $req->biendvalue(3,$postdata["base_remuneration"]);
        $req->biendvalue(4,$postdata["nb_places"]);
        $req->biendvalue(5,$postdata["titre"]);
        $req->biendvalue(6,$_SESSION["current_user"]["id"]);
        $req->biendvalue(7,$postdata["id_entreprise"]);
        $req->execute();
        $req=$this->db->prepare("LAST_INSERT_ID()");
        $req->execute();
        return $req->fetchAll();
    }
    public function delete($postdata)
    {
        $req = $this->db->prepare('DELETE FROM offre where Id_offre = ?');
        $req->bindvalue(1,$postdata);
        $req->execute();
    }
    

}

