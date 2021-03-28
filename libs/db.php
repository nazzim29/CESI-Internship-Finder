<?php
abstract class Db
{
    protected $db;
    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=internshipfinder", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            throw new Exception("Connexion to Database failed", 0506);
        }
    }
}
