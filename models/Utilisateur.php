<?php
require_once("libs\db.php");
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
        $req = $this->db->prepare("select * from utilisateur where email = ?");
        $req->bindvalue(1,$postdata['email']);
        $req->execute();
        
        return $req->fetch(PDO::FETCH_ASSOC);

    }
    public function select($postdata){
        $req = $this->db->prepare("select Password,Type,Promotion,Date_creation,Nb_visite,Nom,Prenom,Email,Id_centre,Id_createur,Id_utilisateur,(select centre.Nom from centre where centre.Id_centre = utilisateur.Id_centre) as Centre from utilisateur where Id_utilisateur = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function visitincr($postdata)
    {
        $req = $this->db->prepare("select * from utilisateur where Id_utilisateur = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_ASSOC);
        $req = $this->db->prepare("UPDATE `utilisateur` SET `Nb_visite`=".($result['Nb_visite']+1)." WHERE Id_utilisateur = ?");
        $req->bindvalue(1,$result['Id_utilisateur']);
        $req->execute();
    }
    public function create($postdata){
        try{

            $req = $this->db->prepare("INSERT INTO `utilisateur`(`Password`, `Type`, `Promotion`, `Date_creation`, `Nom`, `Prenom`, `Email`, `Id_centre`, `Id_Createur`) VALUES (?,?,?,now(),?,?,?,?,?)");
            $req->bindvalue(1,$postdata['password']);
            $req->bindvalue(2,$postdata['type']);
            $req->bindvalue(3,$postdata['promotion']);
            $req->bindvalue(4,$postdata['nom']);
            $req->bindvalue(5,$postdata['prenom']);
            $req->bindvalue(6,$postdata['email']);
            $req->bindvalue(7,$postdata['centre']);
            $req->bindvalue(8,$postdata['createur']);
            $req->execute();
            $req = $this->db->prepare("SELECT LAST_INSERT_ID() as 'id';");
            $req->execute();
            $res = $req->fetch(PDO::FETCH_OBJ);
            return $res->id;
        }catch(PDOException $e){
            if(strpos($e->getmessage(),'Integrity constraint violation') !== false){
                return "Cet utilisateur existe deja dans la base de données";
            }
        }

    }
    public function read(){

    }
    public function update($postdata){
        try{
            $req = $this->db->prepare('UPDATE `utilisateur` SET `Promotion`=?,`Nom`=?,`Prenom`=?,`Email`=?,`Id_centre`=? WHERE `Id_utilisateur`=?');
            $req->bindvalue(1,$postdata['promotion']);
            $req->bindvalue(2,$postdata['nom']);
            $req->bindvalue(3,$postdata['prenom']);
            $req->bindvalue(4,$postdata['email']);
            $req->bindvalue(5,$postdata['centre']);
            $req->bindvalue(5,$postdata['id']);
            $req->execute();
        }catch(PDOException $e){
            if(strpos($e->getmessage(),'Integrity constraint violation') !== false){
                return "cet utilisateur existe deja dans la base de données";
            }
        }
    }
    public function delete($postdata){
        $req = $this->db->prepare("DELETE FROM `utilisateur` WHERE Id_utilisateur = ? ");
        $req->bindvalue(1,$postdata);
        $req->execute();
        
    }
    public function recherche($postdata)
    {
        $req = $this->db->prepare("SELECT Promotion,Nom,Prenom,Email,Id_createur,Id_utilisateur,(SELECT centre.Nom FROM centre WHERE centre.Id_centre = utilisateur.Id_centre) AS Centre,(SELECT concat(ucase(tbl.nom),\" \",CONCAT(UCASE(LEFT(lower(tbl.prenom), 1)),SUBSTRING(lower(tbl.prenom), 2))) from utilisateur as tbl where tbl.Id_utilisateur = utilisateur.Id_Createur) as Createur FROM utilisateur where Type = ?");
        $req->bindvalue(1,$postdata);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
