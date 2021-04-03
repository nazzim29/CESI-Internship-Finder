<?php
require_once('libs\db.php');
class Centre Extends Db
{
    public function select()
    {
        $req = $this->db->prepare("select * from centre");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
