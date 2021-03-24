<?php
require_once('db.php');
class Entreprise Extends Db
{
    protected $_id;
    protected $_secteur_activite;
    protected $_localite;
    protected $_raison_social;
    protected $_email;
    public function getid()
    {
        return $this->$_id;
    }
    public function getsecteuractivite()
    {
        return $this->$_secteur_activite;
    }
    public function getlocalite()
    {
        return $this->$_localite;
    }
    public function getraisonsocial()
    {
        return $this->$_raison_social;
    }
    public function getemail()
    {
        return $this->$_email;
    }
    public function setid(int $id)
    {
        $this->$_id = $id;
    }
    public function setsecteuractivite(string $secteur)
    {
        $this->$_secteur_activite = $secteur;
    }
    public function setlocalite(string $localite)
    {
        $this->$_localite = $localite;
    }
    public function setraisonsocial(string $raison)
    {
        $this->$_raison_social = $raison;
    }
    public function setemail(string $email)
    {
        $this->$_email = $email;
    }
}
