<?php
class Centre
{
    protected $_id;
    protected $_ville;

    public function getid()
    {
        return $this->$_id;
    }
    public function getville()
    {
        return $this->$_ville;
    }
    public function setid(int $id)
    {
        $this->$_id = $id;
    }
    public function setville(string $ville)
    {
        $this->$_ville = $ville;
    }
}
