<?php
abstract class Db
{
    protected static $db;
    abstract public function create();
    abstract public function read();
    abstract public function update();
    abstract public function delete();
    public function __construct(){
        try{
            $this->$db = new PDO("mysql:host=localhost;dbname=internshipfinder", "root", "");
        }catch(PDOException $e){
            throw new Exception("Connexion to Database failed", 0506);
        }
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
