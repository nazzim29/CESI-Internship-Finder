<?php
require_once('libs\db.php');
class Souhaite Extends Db
{
    protected $_id_utilisateur;
    protected $_id_offre;

    public function getidutilisateur()
    {
        return $this->$_id_utilisateur;
    }
    public function getidoffre()
    {
        return $this->$_id_offre;
    }    public function setidutilisateur(int $id)
    {
        $this->$_id_utilisateur = $id;
    }
    public function setidoffre(int $id)
    {
        $this->$_id_offre = $id;
    }
    public function deletebyoffre($postdata)
    {
        $req = $this->db->prepare('DELETE FROM souhaite where Id_offre = ?');
        $req->bindvalue(1,$postdata);
        $req->execute();
    }
    public function selectbyuser($postdata)
    {
        $req = $this->db->prepare("SELECT souhaite.Id_offre, (SELECT offre.Titre from offre where souhaite.Id_offre =  offre.Id_offre) as Titre, (SELECT offre.Date_publication from offre where souhaite.Id_offre =  offre.Id_offre) as Date_publication,(SELECT entreprise.Raison_social from entreprise where (SELECT Id_entreprise from offre where souhaite.Id_offre = offre.Id_offre) = entreprise.Id_entreprise) as Entreprise FROM souhaite where souhaite.Id_utilisateur = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}

