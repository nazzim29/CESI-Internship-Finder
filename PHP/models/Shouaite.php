<?php
class Shouaite
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
}
