<?php
require_once('db.php');
class Portule Extends Db
{
    protected $_id_utilisateur;
    protected $_id_offre;
    protected $_date;
    protected $_step;
    protected $_fiche_validation;
    protected $_convention_stage;


    public function getidutilisateur()
    {
        return $this->$_id_utilisateur;
    }
    public function getidoffre()
    {
        return $this->$_id_offre;
    }
    public function getdate()
    {
        return $this->$_date;
    }
    public function getstep()
    {
        return $this->$_step;
    }
    public function getfichevalidation()
    {
        return $this->$_fiche_validation;
    }
    public function getconvention()
    {
        return $this->$_convention_stage;
    }    
    public function setidutilisateur(int $id)
    {
        $this->$_id_utilisateur = $id;
    }
    public function setidoffre(int $id)
    {
        $this->$_id_offre = $id;
    }
    public function setdate(DateTime $date)
    {
        $this->$_date = $date;
    }
    public function setstep(string $step)
    {
        $this->$_step = $step;
    }
    public function setfichevalidation(string $chemin)
    {
        $this->$_fiche_validation = $chemin;
    }
    public function setconvention(string $chemin)
    {
        $this->$_convention_stage = $chemin;
    }
}
