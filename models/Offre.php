<?php
require_once('\db.php');
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

    public function select($post_data)
    {
        $req= $this->db->prepare("select*from offre where Titre =?");
        $req->bindvalue(1,$post_data["titre"]);
        $req->execute();
        $s=$req->fetchAll();
        return $s;
    }

    

}

