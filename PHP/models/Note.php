<?php
class Note
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

}
