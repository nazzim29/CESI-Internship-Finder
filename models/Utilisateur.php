<?php
require_once("db.php");
class Utilisateur Extends Db
{
    protected $_id;
    protected $_email;
    protected $_password;
    protected $_type;
    protected $_nom;
    protected $_prenom;
    protected $_id_centre;
    protected $_id_promotion;

    public function getid()
    {
        return $this->$_id;
    }
    public function getlogin()
    {
        return $this->$_login;
    }
    public function getpwd()
    {
        return $this->$_pwd;
    }
    public function gettype()
    {
        return $this->$_type;
    }
    public function getnom()
    {
        return $this->$_nom;
    }
    public function getprenom()
    {
        return $this->$_prenom;
    }
    public function getidcentre()
    {
        return $this->$_id_centre;
    }
    public function getidpromotion()
    {
        return $this->$_id_promotion;
    }



    public function setid(int $id)
    {
        $this->$_id = $id;
    }
    public function setlogin(string $login)
    {
        $this->$_login = $login;
    }
    public function setpwd(string $pwd)
    {
        $this->$_pwd = $pwd;
    }
    public function settype(int $type)
    {
        $this->$_type = $type;
    }
    public function setnom(string $nom)
    {
        $this->$_nom = $nom;
    }
    public function setprenom(string $prenom)
    {
        $this->$_prenom = $prenom;
    }
    public function setidcentre(int $idcentre)
    {
        $this->$_id_centre = $idcentre;
    }
    public function setidpromotion(int $idpromotion)
    {
        $this->$_id_promotion = $idpromotion;
    }
    public function selectbyemail(array $postdata){
        $req = $db->prepare("select * from utilisateur where email = :email");
        $result = $req->execute(array(
            ':email' => $postdata['email']
        ));
        echo $result;
    }
    public function create(){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){
        
    }
}
