<?php
require_once('libs\db.php');
class Souhaite Extends Db
{

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
    public function post($postdata)
    {
        $req = $this->db->prepare("INSERT INTO souhaite (Id_utilisateur,Id_offre) values(?,?)");
        $req->bindvalue(1,$postdata['id_utilisateur']);
        $req->bindvalue(2,$postdata['id_offre']);
        $req->execute();

    }
    public function delete($postdata)
    {
        $req = $this->db->prepare("delete from souhaite where Id_utilisateur = ? and Id_offre = ?");
        $req->bindvalue(1,$postdata['id_utilisateur']);
        $req->bindvalue(2,$postdata['id_offre']);
        $req->execute();
    }
}

