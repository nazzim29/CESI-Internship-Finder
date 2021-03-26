<?php
require_once('libs\db.php');
class Note Extends Db
{
    protected $_id_entreprise;
    protected $_id_utilisateur;
    protected $_note;
    protected $_commentaire;
    public function getidentreprise()
    {       
        return $this->$_id_entreprise;
    }
    public function getidutilisateur()
    {
        return $this->$_id_utilisateur;
    }
    public function getnote()
    {
        return $this->$_note;
    }
    public function setidentreprise(int $id)
    {       
        $this->$_id_entreprise = $id;
    }
    public function setidutilisateur(int $id)
    {
        $this->$_id_utilisateur = $id;
    }
    public function setnote(int $note)
    {
        $this->$_note = $note;
    }
    public function create()
    {
        # code...
    }
    public function read()
    {

    }
    public function update()
    {
        # code...
    }
    public function delete()
    {
        # code...
    }

}
