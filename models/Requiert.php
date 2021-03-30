<?php
require_once('libs\db.php');
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
    public function post($postdata)
    {
        $req=$this->db->prepare("INSERT INTO Requiert(Id_competence,Id_offre) values(?,?)");
        $req->bindvalue(1,$postdata["id_competence"]);
        $req->bindvalue(2,$postdata["id_offre"]);
        $req->execute();
    }
    public function deletebyoffer($postdata)
    {
        $req = $this->db->prepare('DELETE FROM requiert where Id_offre = ?');
        $req->bindvalue(1,$postdata);
        $req->execute();
    }
}

