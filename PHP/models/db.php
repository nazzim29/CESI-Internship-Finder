<?php
abstract class Db
{
    protected static $db;
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();
    public function __construct(){
        try{
            $this->$db = new PDO("mysql:host=localhost;dbname=internshipfinder", "root", "");
        }catch(PDOException $e){
            throw new Exception("Connexion to Database failed", 0506);
        }
        
    }
}
