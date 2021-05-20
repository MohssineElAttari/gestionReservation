<?php
class TypeBien
{
    private $idTypeBien;
    private $type;

    function __construct($type)
    {
        $this->type = $type;
    }
    public function getIdTypeBien()
    {
        return $this->idTypeBien;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}
